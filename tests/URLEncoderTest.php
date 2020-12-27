<?php

namespace MuCTS\URLEncoder\Tests;

use MuCTS\URLEncoder\URLEncoder;
use PHPUnit\Framework\TestCase;

class URLEncoderTest extends TestCase
{
    public function testUrlEncode()
    {
        $this->assertEquals(urlencode('`'), URLEncoder::encode('`'));
        $this->assertEquals(urlencode('!'), URLEncoder::encode('!'));
        $this->assertEquals(urlencode('@'), URLEncoder::encode('@'));
        $this->assertEquals(urlencode('#'), URLEncoder::encode('#'));
        $this->assertEquals(urlencode('$'), URLEncoder::encode('$'));
        $this->assertEquals(urlencode('%'), URLEncoder::encode('%'));
        $this->assertEquals(urlencode('^'), URLEncoder::encode('^'));
        $this->assertEquals(urlencode('&'), URLEncoder::encode('&'));
        $this->assertNotEquals(urlencode('*'), URLEncoder::encode('*'));
        $this->assertEquals('*', URLEncoder::encode('*'));
        $this->assertEquals(urlencode('('), URLEncoder::encode('('));
        $this->assertEquals(urlencode(')'), URLEncoder::encode(')'));
        $this->assertEquals(urlencode('_'), URLEncoder::encode('_'));
        $this->assertEquals(urlencode('+'), URLEncoder::encode('+'));

        $this->assertEquals(urlencode('~'), URLEncoder::encode('~'));
        $this->assertEquals(urlencode('1'), URLEncoder::encode('1'));
        $this->assertEquals(urlencode('2'), URLEncoder::encode('2'));
        $this->assertEquals(urlencode('3'), URLEncoder::encode('3'));
        $this->assertEquals(urlencode('4'), URLEncoder::encode('4'));
        $this->assertEquals(urlencode('5'), URLEncoder::encode('5'));
        $this->assertEquals(urlencode('6'), URLEncoder::encode('6'));
        $this->assertEquals(urlencode('7'), URLEncoder::encode('7'));
        $this->assertEquals(urlencode('8'), URLEncoder::encode('8'));
        $this->assertEquals(urlencode('9'), URLEncoder::encode('9'));
        $this->assertEquals(urlencode('0'), URLEncoder::encode('0'));
        $this->assertEquals(urlencode('-'), URLEncoder::encode('-'));
        $this->assertEquals(urlencode('='), URLEncoder::encode('='));

        $this->assertEquals('1', URLEncoder::encode('1'));
        $this->assertEquals('2', URLEncoder::encode('2'));
        $this->assertEquals('3', URLEncoder::encode('3'));
        $this->assertEquals('4', URLEncoder::encode('4'));
        $this->assertEquals('5', URLEncoder::encode('5'));
        $this->assertEquals('6', URLEncoder::encode('6'));
        $this->assertEquals('7', URLEncoder::encode('7'));
        $this->assertEquals('8', URLEncoder::encode('8'));
        $this->assertEquals('9', URLEncoder::encode('9'));
        $this->assertEquals('0', URLEncoder::encode('0'));
        $this->assertEquals('a', URLEncoder::encode('a'));
        $this->assertEquals('b', URLEncoder::encode('b'));
        $this->assertEquals('c', URLEncoder::encode('c'));
        $this->assertEquals('d', URLEncoder::encode('d'));
        $this->assertEquals('e', URLEncoder::encode('e'));
        $this->assertEquals('f', URLEncoder::encode('f'));
        $this->assertEquals('g', URLEncoder::encode('g'));
        $this->assertEquals('h', URLEncoder::encode('h'));
        $this->assertEquals('i', URLEncoder::encode('i'));
        $this->assertEquals('j', URLEncoder::encode('j'));
        $this->assertEquals('k', URLEncoder::encode('k'));
        $this->assertEquals('m', URLEncoder::encode('m'));
        $this->assertEquals('n', URLEncoder::encode('n'));
        $this->assertEquals('o', URLEncoder::encode('o'));
        $this->assertEquals('p', URLEncoder::encode('p'));
        $this->assertEquals('q', URLEncoder::encode('q'));
        $this->assertEquals('r', URLEncoder::encode('r'));
        $this->assertEquals('s', URLEncoder::encode('s'));
        $this->assertEquals('t', URLEncoder::encode('t'));
        $this->assertEquals('u', URLEncoder::encode('u'));
        $this->assertEquals('v', URLEncoder::encode('v'));
        $this->assertEquals('w', URLEncoder::encode('w'));
        $this->assertEquals('x', URLEncoder::encode('x'));
        $this->assertEquals('y', URLEncoder::encode('y'));
        $this->assertEquals('z', URLEncoder::encode('z'));

        $this->assertEquals('A', URLEncoder::encode('A'));
        $this->assertEquals('B', URLEncoder::encode('B'));
        $this->assertEquals('C', URLEncoder::encode('C'));
        $this->assertEquals('D', URLEncoder::encode('D'));
        $this->assertEquals('E', URLEncoder::encode('E'));
        $this->assertEquals('F', URLEncoder::encode('F'));
        $this->assertEquals('G', URLEncoder::encode('G'));
        $this->assertEquals('H', URLEncoder::encode('H'));
        $this->assertEquals('I', URLEncoder::encode('I'));
        $this->assertEquals('J', URLEncoder::encode('J'));
        $this->assertEquals('K', URLEncoder::encode('K'));
        $this->assertEquals('M', URLEncoder::encode('M'));
        $this->assertEquals('N', URLEncoder::encode('N'));
        $this->assertEquals('O', URLEncoder::encode('O'));
        $this->assertEquals('P', URLEncoder::encode('P'));
        $this->assertEquals('Q', URLEncoder::encode('Q'));
        $this->assertEquals('R', URLEncoder::encode('R'));
        $this->assertEquals('S', URLEncoder::encode('S'));
        $this->assertEquals('T', URLEncoder::encode('T'));
        $this->assertEquals('U', URLEncoder::encode('U'));
        $this->assertEquals('V', URLEncoder::encode('V'));
        $this->assertEquals('W', URLEncoder::encode('W'));
        $this->assertEquals('X', URLEncoder::encode('X'));
        $this->assertEquals('Y', URLEncoder::encode('Y'));
        $this->assertEquals('Z', URLEncoder::encode('Z'));

        $this->assertEquals('-', URLEncoder::encode('-'));
        $this->assertEquals('a', URLEncoder::encode('a'));
        $this->assertEquals('.', URLEncoder::encode('.'));
        $this->assertEquals('*', URLEncoder::encode('*'));
        $this->assertEquals('_', URLEncoder::encode('_'));

        $this->assertEquals(urlencode(' '), URLEncoder::encode(' '));
        $this->assertEquals(urlencode('Q'), URLEncoder::encode('Q'));
        $this->assertEquals(urlencode('W'), URLEncoder::encode('W'));
        $this->assertEquals(urlencode('E'), URLEncoder::encode('E'));
        $this->assertEquals(urlencode('R'), URLEncoder::encode('R'));
        $this->assertEquals(urlencode('T'), URLEncoder::encode('T'));
        $this->assertEquals(urlencode('Y'), URLEncoder::encode('Y'));
        $this->assertEquals(urlencode('U'), URLEncoder::encode('U'));
        $this->assertEquals(urlencode('I'), URLEncoder::encode('I'));
        $this->assertEquals(urlencode('O'), URLEncoder::encode('O'));
        $this->assertEquals(urlencode('P'), URLEncoder::encode('P'));
        $this->assertEquals(urlencode('['), URLEncoder::encode('['));
        $this->assertEquals(urlencode(']'), URLEncoder::encode(']'));
        $this->assertEquals(urlencode('\\'), URLEncoder::encode('\\'));

        $this->assertEquals(urlencode('    '), URLEncoder::encode('    '));
        $this->assertEquals(urlencode('q'), URLEncoder::encode('q'));
        $this->assertEquals(urlencode('w'), URLEncoder::encode('w'));
        $this->assertEquals(urlencode('e'), URLEncoder::encode('e'));
        $this->assertEquals(urlencode('r'), URLEncoder::encode('r'));
        $this->assertEquals(urlencode('t'), URLEncoder::encode('t'));
        $this->assertEquals(urlencode('y'), URLEncoder::encode('y'));
        $this->assertEquals(urlencode('u'), URLEncoder::encode('u'));
        $this->assertEquals(urlencode('i'), URLEncoder::encode('i'));
        $this->assertEquals(urlencode('o'), URLEncoder::encode('o'));
        $this->assertEquals(urlencode('p'), URLEncoder::encode('p'));
        $this->assertEquals(urlencode('{'), URLEncoder::encode('{'));
        $this->assertEquals(urlencode('}'), URLEncoder::encode('}'));
        $this->assertEquals(urlencode('|'), URLEncoder::encode('|'));

        $this->assertEquals(urlencode('A'), URLEncoder::encode('A'));
        $this->assertEquals(urlencode('S'), URLEncoder::encode('S'));
        $this->assertEquals(urlencode('D'), URLEncoder::encode('D'));
        $this->assertEquals(urlencode('F'), URLEncoder::encode('F'));
        $this->assertEquals(urlencode('G'), URLEncoder::encode('G'));
        $this->assertEquals(urlencode('H'), URLEncoder::encode('H'));
        $this->assertEquals(urlencode('J'), URLEncoder::encode('J'));
        $this->assertEquals(urlencode('K'), URLEncoder::encode('K'));
        $this->assertEquals(urlencode('L'), URLEncoder::encode('L'));
        $this->assertEquals(urlencode(';'), URLEncoder::encode(';'));
        $this->assertEquals(urlencode('\''), URLEncoder::encode('\''));
        $this->assertEquals(urlencode('
        '), URLEncoder::encode('
        '));

        $this->assertEquals(urlencode('a'), URLEncoder::encode('a'));
        $this->assertEquals(urlencode('s'), URLEncoder::encode('s'));
        $this->assertEquals(urlencode('d'), URLEncoder::encode('d'));
        $this->assertEquals(urlencode('f'), URLEncoder::encode('f'));
        $this->assertEquals(urlencode('g'), URLEncoder::encode('g'));
        $this->assertEquals(urlencode('h'), URLEncoder::encode('h'));
        $this->assertEquals(urlencode('j'), URLEncoder::encode('j'));
        $this->assertEquals(urlencode('k'), URLEncoder::encode('k'));
        $this->assertEquals(urlencode('l'), URLEncoder::encode('l'));
        $this->assertEquals(urlencode(':'), URLEncoder::encode(':'));
        $this->assertEquals(urlencode('"'), URLEncoder::encode('"'));

        $this->assertEquals(urlencode('Z'), URLEncoder::encode('Z'));
        $this->assertEquals(urlencode('X'), URLEncoder::encode('X'));
        $this->assertEquals(urlencode('C'), URLEncoder::encode('C'));
        $this->assertEquals(urlencode('V'), URLEncoder::encode('V'));
        $this->assertEquals(urlencode('B'), URLEncoder::encode('B'));
        $this->assertEquals(urlencode('N'), URLEncoder::encode('N'));
        $this->assertEquals(urlencode('M'), URLEncoder::encode('M'));
        $this->assertEquals(urlencode(','), URLEncoder::encode(','));
        $this->assertEquals(urlencode('.'), URLEncoder::encode('.'));
        $this->assertEquals(urlencode('/'), URLEncoder::encode('/'));

        $this->assertEquals(urlencode('z'), URLEncoder::encode('z'));
        $this->assertEquals(urlencode('x'), URLEncoder::encode('x'));
        $this->assertEquals(urlencode('c'), URLEncoder::encode('c'));
        $this->assertEquals(urlencode('v'), URLEncoder::encode('v'));
        $this->assertEquals(urlencode('b'), URLEncoder::encode('b'));
        $this->assertEquals(urlencode('n'), URLEncoder::encode('n'));
        $this->assertEquals(urlencode('m'), URLEncoder::encode('m'));
        $this->assertEquals(urlencode('<'), URLEncoder::encode('<'));
        $this->assertEquals(urlencode('>'), URLEncoder::encode('>'));
        $this->assertEquals(urlencode('?'), URLEncoder::encode('?'));

        $this->assertEquals(urlencode('\n'), URLEncoder::encode('\n'));
        $this->assertEquals(urlencode('\t'), URLEncoder::encode('\t'));
        $this->assertEquals(urlencode('\r'), URLEncoder::encode('\r'));
        $this->assertEquals('+', URLEncoder::encode(' '));

        $this->assertEquals(urlencode('？'), URLEncoder::encode('？'));
        $this->assertEquals(urlencode('》'), URLEncoder::encode('》'));
        $this->assertEquals(urlencode('《'), URLEncoder::encode('《'));
        $this->assertEquals(urlencode('，'), URLEncoder::encode('，'));
        $this->assertEquals(urlencode('。'), URLEncoder::encode('。'));
        $this->assertEquals(urlencode('；'), URLEncoder::encode('；'));
        $this->assertEquals(urlencode('、'), URLEncoder::encode('、'));
        $this->assertEquals(urlencode('＇'), URLEncoder::encode('＇'));
        $this->assertEquals(urlencode('【'), URLEncoder::encode('【'));
        $this->assertEquals(urlencode('】'), URLEncoder::encode('】'));
        $this->assertEquals(urlencode('「'), URLEncoder::encode('「'));
        $this->assertEquals(urlencode('『'), URLEncoder::encode('『'));
        $this->assertEquals(urlencode('』'), URLEncoder::encode('』'));
        $this->assertEquals(urlencode('」'), URLEncoder::encode('」'));
        $this->assertEquals(urlencode('～'), URLEncoder::encode('～'));
        $this->assertEquals(urlencode('`'), URLEncoder::encode('`'));
        $this->assertEquals(urlencode('！'), URLEncoder::encode('！'));
        $this->assertEquals(urlencode('＠'), URLEncoder::encode('＠'));
        $this->assertEquals(urlencode('＃'), URLEncoder::encode('＃'));
        $this->assertEquals(urlencode('％'), URLEncoder::encode('％'));
        $this->assertEquals(urlencode('￥'), URLEncoder::encode('￥'));
        $this->assertEquals(urlencode('……'), URLEncoder::encode('……'));
        $this->assertEquals(urlencode('＆'), URLEncoder::encode('＆'));
        $this->assertEquals(urlencode('（'), URLEncoder::encode('（'));
        $this->assertEquals(urlencode('）'), URLEncoder::encode('）'));
        $this->assertEquals(urlencode('－'), URLEncoder::encode('－'));
        $this->assertEquals(urlencode('——'), URLEncoder::encode('——'));
        $this->assertEquals(urlencode('＋'), URLEncoder::encode('＋'));
        $this->assertEquals(urlencode('＝'), URLEncoder::encode('＝'));

        $this->assertNotEquals(urlencode('-._*0123456789abcdefghijklmqopqrstuvwxyzABCDEFGHIJKLMQOPQRSTUVWXYZ'), URLEncoder::encode('-._*0123456789abcdefghijklmqopqrstuvwxyzABCDEFGHIJKLMQOPQRSTUVWXYZ'));
        $this->assertEquals('-._*0123456789abcdefghijklmqopqrstuvwxyzABCDEFGHIJKLMQOPQRSTUVWXYZ', URLEncoder::encode('-._*0123456789abcdefghijklmqopqrstuvwxyzABCDEFGHIJKLMQOPQRSTUVWXYZ'));

        $str = '1.用户反馈：首先因为麻麻对我们也不了解，本来是打算报其他培训机构的。一天时间被顾问老师用优惠拍进来的，因为老师承诺不合适试学期可以随时退款，妈妈就想着试试。顾问老师当时也就FL说有退费风险。实际上了几节课妈妈觉得不合适，一是觉得不固定外教效果不好，二是因为四人班孩子开口次数太少了，孩子都没说几次就下课了，觉得不合适\n2.客服处理：觉得一堂课25分钟，4个小朋友学习内容少互动少；和家长沟通其他小朋友练习的时候也是在输入的过程，关于家长所说不固定外教，这边也分析了我们的外教优势，可以帮忙申请延长试学期，再体验一下，家长决绝，说不在国内漫游贵，不愿意再沟通了，坚持退款。\n3.用户处理结果：确认退费，退费金额按照课包平均课时费收取，每课时79.98，消耗6节，扣除479.88.退费金额：3519.12元；但家长和顾问之前沟通是57元一课时，已核实，差价由顾问老师补回：22.98X6=137.88，总计金额：3657元。原路返回无异议，请提交退费流程。';
        $this->assertEquals(urlencode($str), URLEncoder::encode($str));

        $str = '1.用户反馈：首先因为麻麻对我们也不了解，本来是打算报其他培训机构的。一天时间被顾问老师用优惠拍进来的，因为老师承诺不合适试学期可以随时退款，妈妈就想着试试。顾问老师当时也就FL说有退费风险。实际上了几节课妈妈觉得不合适，一是觉得不固定外教效果不好，二是因为四人班孩子开口次数太少了，孩子都没说几次就下课了，觉得不合适\n2.客服处理：觉得一堂课25分钟，4个小朋友学习内容少互动少；和家长沟通其他小朋友练习的时候也是在输入的过程，关于家长所说不固定外教，这边也分析了我们的外教优势，可以帮忙申请延长试学期，再体验一下，家长决绝，说不在国内漫游贵，不愿意再沟通了，坚持退款。\n3.用户处理结果：确认退费，退费金额按照课包平均课时费收取，每课时79.98，消耗6节，扣除479.88.退费金额：3519.12元；但家长和顾问之前沟通是57元一课时，已核实，差价由顾问老师补回：22.98*6=137.88，总计金额：3657元。原路返回无异议，请提交退费流程。';
        $this->assertNotEquals(urlencode($str), URLEncoder::encode($str));
    }
}