<?php


namespace MuCTS\URLEncoder;


class URLEncoder
{
    /**
     *  模拟 http_build_query
     *
     * @param array $params
     * @return string
     */
    public static function httpBuildQuery(array $params): string
    {
        $params = self::buildParams($params);
        $str    = [];
        foreach ($params as $key => $val) {
            array_push($str, self::encode($key) . '=' . self::encode($val));
        }
        return implode('&', $str);
    }

    /**
     * 构造键值对数组
     * @param $params
     * @param array $args
     * @return array
     */
    private static function buildParams($params, $args = []): array
    {
        $newParams = [];
        foreach ($params as $key => $val) {
            $newArgs   = $args;
            $newArgs[] = $key;
            if (is_array($val)) {
                $arr       = self::buildParams($val, $newArgs);
                $newParams = array_merge($newParams, $arr);
            } else {
                $newParams[self::getBuildKey($newArgs)] = $val;
            }
        }
        return $newParams;
    }

    /**
     * 构造key
     * @param $args
     * @return string
     */
    private static function getBuildKey($args): string
    {
        $str = "";
        $i   = 0;
        foreach ($args as $val) {
            if ($i == 0) {
                $str .= $val;
            } else {
                $str .= '[' . $val . ']';
            }
            $i++;
        }
        return $str;
    }

    /**
     * 模拟url encode
     *
     * @param string $string
     * @return string
     */
    public static function encode(string $string): string
    {
        $len = strlen($string);
        $res = "";
        for ($i = 0; $i < $len; $i++) {
            $res .= self::encodeChar($string{$i});
        }
        return $res;
    }

    /**
     * 单个字符转义规则
     * 不做转义：[-._*]|[0-9]|[a-zA-Z]
     * 空格转义+
     *
     * @param string $char
     * @return string
     */
    private static function encodeChar(string $char): string
    {
        if ($char == " ") {
            return "+";
        }
        $ord = ord($char);
        if (($ord >= ord('0') && $ord <= ord('9'))
            || ($ord >= ord('A') && $ord <= ord('Z'))
            || ($ord >= ord('a') && $ord <= ord('z'))
            || (in_array($char, ['-', '.', '_', '*']))) {
            return $char;
        }
        return '%' . strtoupper(dechex($ord));
    }
}