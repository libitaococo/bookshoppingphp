-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-04 09:06:32
-- 服务器版本： 5.7.9
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `bookshop_admin`
--

DROP TABLE IF EXISTS `bookshop_admin`;
CREATE TABLE IF NOT EXISTS `bookshop_admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(20) NOT NULL,
  `adminpassword` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `bookshop_admin`
--

INSERT INTO `bookshop_admin` (`id`, `adminname`, `adminpassword`) VALUES
(7, 'cici', 'cici'),
(2, 'coco', 'coco'),
(3, 'tom', 'tom'),
(4, 'wang', 'wang'),
(5, 'li', 'li'),
(6, 'bob', 'bob');

-- --------------------------------------------------------

--
-- 表的结构 `bookshop_cart`
--

DROP TABLE IF EXISTS `bookshop_cart`;
CREATE TABLE IF NOT EXISTS `bookshop_cart` (
  `ctid` int(10) NOT NULL AUTO_INCREMENT,
  `cnum` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`ctid`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `bookshop_cart`
--

INSERT INTO `bookshop_cart` (`ctid`, `cnum`, `pid`, `uid`) VALUES
(10, 2, 23, 6),
(11, 2, 29, 6),
(14, 1, 20, 6),
(13, 3, 32, 6),
(15, 2, 20, 6);

-- --------------------------------------------------------

--
-- 表的结构 `bookshop_cate`
--

DROP TABLE IF EXISTS `bookshop_cate`;
CREATE TABLE IF NOT EXISTS `bookshop_cate` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `cName` (`cname`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bookshop_cate`
--

INSERT INTO `bookshop_cate` (`cid`, `cname`) VALUES
(12, '传记'),
(7, '历史'),
(11, '小说'),
(10, '心理学'),
(13, '政治'),
(5, '文学');

-- --------------------------------------------------------

--
-- 表的结构 `bookshop_comment`
--

DROP TABLE IF EXISTS `bookshop_comment`;
CREATE TABLE IF NOT EXISTS `bookshop_comment` (
  `coid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `score` enum('一星','两星','三星','四星','五星') NOT NULL DEFAULT '一星',
  `content` text NOT NULL,
  `uid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  PRIMARY KEY (`coid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bookshop_comment`
--

INSERT INTO `bookshop_comment` (`coid`, `score`, `content`, `uid`, `pid`) VALUES
(4, '三星', '比人类简史好看。不管什么书，怼基督教伊斯兰部分总能逗得我哈哈大笑，这部也一样。其他地方见解也读到。虽然学术上有疏漏的地方，但总体上非常值得一读', 6, 28),
(5, '五星', '从《灿烂千阳》过来的，这本书一直评分居高不下就下载了，冲着想了解另一个国家生活看的。\r\n胡塞尼的作品都是很朴实的语言，写出让人堵心又忍不住继续看的故事。。\r\n每次读的时候都会被带到书里的世界，合上书庆幸自己活在一个和平的国度。', 6, 26),
(7, '四星', '这本书第一人称写主角，不得不说这本书有些悲剧，幸好最后的结局是好的，这本书最感人的地方就是书名那几个字:为你，千千万万遍！这句话在书里出现次数不多，但是哈桑，阿米尔，阿里，以及作者的父亲，都在用自己的方式爱着，悲剧中带着感动。唯一缺点就是剧情有点惨，恶人最后只少了一只眼睛，而没有受到严惩。', 4, 26),
(9, '五星', '同样的家庭，不同的身世背景，不同的性格，截然相反的命运...阿米尔是幸运的，遇到一个开口第一句话喊着自己名字的哈桑，追着蓝色风筝的哈桑，为了守护阿米尔回来信念而付出生命的哈桑，而最让人挥之不去的莫过于那句:“为你，千千万万遍”的哈桑!!!阿米尔一生躲在他人身后，却终究未能躲过命运的安排...人各有命，上天注定，如果脚下的路不是你自己选的，那么旅途的终点到哪里没有人会知道。凡是要走的路，都是必经之路。我想，每个人心里都会有一只风筝，只是颜色不同，等待着你、我去追逐..', 8, 26),
(13, '三星', '同样的家庭，不同的身世背景，不同的性格，截然相反的命运...阿米尔是幸运的，遇到一个开口第一句话喊着自己名字的哈桑，追着蓝色风筝的哈桑，为了守护阿米尔回来信念而付出生命的哈桑，而最让人挥之不去的莫过于那句:“为你，千千万万遍”的哈桑!!!阿米尔一生躲在他人身后，却终究未能躲过命运的安排...人各有命，上天注定，如果脚下的路不是你自己选的，那么旅途的终点到哪里没有人会知道。凡是要走的路，都是必经之路。我想，每个人心里都会有一只风筝，只是颜色不同，等待着你、我去追逐..', 8, 23),
(14, '三星', '同样的家庭，不同的身世背景，不同的性格，截然相反的命运...阿米尔是幸运的，遇到一个开口第一句话喊着自己名字的哈桑，追着蓝色风筝的哈桑，为了守护阿米尔回来信念而付出生命的哈桑，而最让人挥之不去的莫过于那句:“为你，千千万万遍”的哈桑!!!阿米尔一生躲在他人身后，却终究未能躲过命运的安排...人各有命，上天注定，如果脚下的路不是你自己选的，那么旅途的终点到哪里没有人会知道。凡是要走的路，都是必经之路。我想，每个人心里都会有一只风筝，只是颜色不同，等待着你、我去追逐..', 7, 23),
(16, '三星', '每个人的内心都有一个阿米尔，所以很容易代入到故事里面，产生共鸣。在踏上“再次成为一个好人的路”之前，阿米尔的做法，可能是我们大部分人选择的做法：希望独霸父亲的关注与爱，希望父亲以自己为傲，希望明哲保身。。。。。。我边看边想，如果是我遇到这种情况，我也会这样做\r\n故事里面很多感动的句子段落。印象深刻的是：一个不能为自己挺身而出的孩子，长大之后只能是一个懦夫。。。；他说你是他一生最后的朋友。。。；现在我已经老了，但也许还没有老到不能为自己挺身而出的地步。。。；', 7, 26),
(17, '五星', '风筝是象征，象征着善良于美好，追风筝的人自然就是追逐着善良的人。主人公的童年是美好的，有和他一起玩耍，一起读书，一起放风筝的哈桑。但也是不幸的是因为等级观念和宗教意识，让他和哈桑在思想层面上没有平等。因美国攻打阿富汗，之后阿米尔搬去美国，不就父亲逝去，也接了婚。在拉辛汗的电话中，让他重新回到阿富汗寻找当年的哈桑，但却为找到，但救了哈桑的儿子。', 6, 26),
(18, '五星', '胡赛尼的三部曲都读过了，尽管最爱灿烂千阳，但本书也绝对精彩，只愿世间再无战乱，人们之间再无仇恨与敌意，欲望少一些，平和多一些', 6, 26),
(19, '三星', '故事为止震撼和精彩的地方在后面，前面好长一部分，看到快睡着了，硬是坚持着看完，总之还行', 6, 26),
(20, '四星', '跨越几十年的故事，使我们得以了解阿富汗曾经所经历的历史浩劫。在跌宕起伏的故事中，层层剥离人性的多样性，让人唏嘘；最终，人性的良善又给人以希望。让人难忘的一本书。', 7, 26);

-- --------------------------------------------------------

--
-- 表的结构 `bookshop_order`
--

DROP TABLE IF EXISTS `bookshop_order`;
CREATE TABLE IF NOT EXISTS `bookshop_order` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `oprice` decimal(10,2) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `onum` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `bookshop_order`
--

INSERT INTO `bookshop_order` (`oid`, `oprice`, `oname`, `onum`, `uid`) VALUES
(35, '184.00', '20170604141629653216', 6, 4),
(33, '194.00', '20170604141020853469', 6, 4),
(36, '54.00', '20170604141852796176', 2, 7);

-- --------------------------------------------------------

--
-- 表的结构 `bookshop_order_data`
--

DROP TABLE IF EXISTS `bookshop_order_data`;
CREATE TABLE IF NOT EXISTS `bookshop_order_data` (
  `odid` int(10) NOT NULL AUTO_INCREMENT,
  `oname` varchar(50) NOT NULL,
  `pid` int(10) NOT NULL,
  `pname` varchar(225) CHARACTER SET utf8 NOT NULL,
  `mprice` decimal(10,2) NOT NULL,
  `vprice` decimal(10,2) NOT NULL,
  `cnum` int(10) NOT NULL,
  `sum` decimal(10,2) NOT NULL,
  PRIMARY KEY (`odid`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `bookshop_order_data`
--

INSERT INTO `bookshop_order_data` (`odid`, `oname`, `pid`, `pname`, `mprice`, `vprice`, `cnum`, `sum`) VALUES
(13, '20170604141020853469', 23, '解忧杂货店', '30.00', '28.00', 2, '56.00'),
(14, '20170604141020853469', 26, '追风筝的人', '30.00', '24.00', 3, '72.00'),
(15, '20170604141020853469', 32, '万历十五年', '40.00', '38.00', 1, '38.00'),
(16, '20170604141107845779', 24, '恋情的终结', '35.00', '30.00', 1, '30.00'),
(17, '20170604141107845779', 27, '了不起的盖茨比', '30.00', '27.00', 1, '27.00'),
(18, '20170604141107845779', 28, '未来简史', '50.00', '44.00', 1, '44.00'),
(19, '20170604141629653216', 21, '张爱玲给我的信件', '33.00', '30.00', 2, '60.00'),
(20, '20170604141629653216', 22, '我这一辈子', '32.00', '30.00', 1, '30.00'),
(21, '20170604141629653216', 27, '了不起的盖茨比', '30.00', '27.00', 2, '54.00'),
(22, '20170604141629653216', 29, '丝绸之路:一部全新的世界史', '40.00', '35.00', 1, '35.00'),
(23, '20170604141852796176', 24, '恋情的终结', '35.00', '30.00', 1, '30.00'),
(24, '20170604141852796176', 26, '追风筝的人', '30.00', '24.00', 1, '24.00');

-- --------------------------------------------------------

--
-- 表的结构 `bookshop_pro`
--

DROP TABLE IF EXISTS `bookshop_pro`;
CREATE TABLE IF NOT EXISTS `bookshop_pro` (
  `pid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) NOT NULL,
  `psn` varchar(50) NOT NULL,
  `pnum` int(10) NOT NULL,
  `mprice` decimal(10,2) NOT NULL,
  `vprice` decimal(10,2) NOT NULL,
  `pdesc` text NOT NULL,
  `cid` smallint(5) UNSIGNED NOT NULL,
  `pubtime` timestamp(6) NOT NULL,
  `image1` varchar(300) NOT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pName` (`pname`),
  UNIQUE KEY `pName_2` (`pname`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bookshop_pro`
--

INSERT INTO `bookshop_pro` (`pid`, `pname`, `psn`, `pnum`, `mprice`, `vprice`, `pdesc`, `cid`, `pubtime`, `image1`) VALUES
(16, '名人传', '2156', 300, '30.00', '24.00', '&lt;h1 class=&quot;a-size-large a-spacing-none&quot; id=&quot;title&quot; style=&quot;color:#111111;text-indent:0px;font-family:&amp;quot;Hiragino Sans GB&amp;quot;, &amp;quot;Microsoft Yahei&amp;quot;, Arial, sans-serif;font-size:21px !important;font-style:normal;font-weight:700;margin-left:0px;background-color:#FFFFFF;&quot;&gt;\r\n	&lt;span class=&quot;a-size-large&quot; id=&quot;productTitle&quot; style=&quot;line-height:1.3 !important;font-size:19px !important;&quot;&gt;&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;★《名人传》问世以来，影响了亿万读者，激发了他们面对困境时的勇气，作者弘扬了二十世纪文学崇高的人道主义传统，展现了他们的性格，是世界传记文学作品中的典范之作。&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;★《名人传》记录了三位艺术巨匠，他们在困顿忧患的人生征途上所历经的磨难和不屈服命运、不改初衷的心路历程；凸显了他们丰满的人格和宽广的胸襟。&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;★《名人传》是罗曼•罗兰所著，他是法国杰出的现实主义作家，也是诺贝尔文学奖获得者。罗曼•罗兰经典作品，傅雷译，杨绛先生生前推荐，经典畅销！&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;★集《贝多芬传》、《米开朗琪罗传》和《托尔斯泰传》三部传记，深度描述了不同时代、不同民族的三位伟大艺术家的精神力量和心灵之美。&lt;/span&gt;&lt;/span&gt;\r\n&lt;/h1&gt;', 12, '2017-06-01 08:10:12.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fcbe4584a3.jpg'),
(17, '动荡', '12354', 321, '30.00', '25.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;偶然在地下室发现的尘封半个世纪之久的日记，促使八十五岁高龄的恩岑斯贝格尔重新串联起他生平所经历的东西方重大历史事件。他在20世纪60年代两次深入探访苏联、古巴、柬埔寨等社会主义阵营国家，记录下与赫鲁晓夫、卡斯特罗、西哈努克、杜布切克、聂鲁达等众多政治领袖和文学名人接触过程中鲜为人知的生活轶事。&lt;/span&gt;', 12, '2017-06-01 08:13:17.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fcc9d3b129.jpg'),
(18, '苏东坡传', '3252', 421, '33.00', '30.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;《苏东坡传(纪念典藏版)》讲述的苏东坡是一个秉性难改的乐天派，是悲天悯人的道德家，是散文作家，是新派的画家，是伟大的书法家，是酿酒的实验者，是工程师，是假道学的反对派，是瑜伽术的修炼者，是佛教徒，是士大夫，是皇帝的秘书，是饮酒成性者，是心肠慈悲的法官，是政治上的坚持己见者，是月下的漫步者，是诗人，是生性诙谐爱开玩笑的人。但是这还不足以道出苏东坡的全部。&lt;/span&gt;', 12, '2017-06-01 08:14:20.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fccdcdd926.jpg'),
(19, '直面挑战', '3654', 542, '30.00', '28.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;《直面挑战》对很多美国人来说，卡莉•菲奥莉娜不仅是惠普前首席执行官、一位知名的女高管，她还是一个时代的符号。她被全美女性奉为男权社会的变革者，她的成功也是女性获得商业社会平等权益的胜利。2006年，卡莉•菲奥莉娜出版了畅销书《勇敢抉择》。之后，她经历了一系列人生挑战：与癌症抗争，丧女之痛，在美国加州竞选参议员却未能胜出。直面人生的种种挫折，她依然勇敢无畏。她说：“这些经历是上帝对我的馈赠，我从中吸取了经验和教训。&lt;/span&gt;', 12, '2017-06-01 08:18:36.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fcddc61675.jpg'),
(20, '看见 ', '564', 32, '35.00', '33.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;《看见》是知名记者和主持人柴静讲述央视十年历程的自传性作品，既是柴静个人的成长告白书，某种程度上亦可视作中国社会十年变迁的备忘录。十年前她被选择成为国家电视台新闻主播，却因毫无经验而遭遇挫败，非典时期成为现场记者后，现实生活犬牙交错的切肤之感，让她一点一滴脱离外在与自我的束缚，对生活与人性有了更为宽广与深厚的理解。十年之间，非典、汶川地震、两会报道、北京奥运……在每个重大事件现场，几乎都能发现柴静的身影，而如华南虎照、征地等刚性的调查报道她也多有制作。&lt;/span&gt;', 12, '2017-06-01 08:20:30.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fce4ed51ff.jpg'),
(21, '张爱玲给我的信件', '6946', 100, '33.00', '30.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;张爱玲的「信物」与夏志清的「按语」，探寻张爱玲最私密的心灵角落。文学史上最难得的一场相知相惜。坦坦白白，鱼雁往返，一笔一划，一字一句，张爱玲与夏志清以三十余年的往复书简，告诉我们，如何思辩、如何质疑、如何哀伤、如何劝慰、如何任性脆弱、如何柴米油盐……织造出一幅中国现代文学史的独特景色。试着辨识字里行间的迹证与致密的人情纹路，然后，我们终有一天，总算懂得人间的真实。&lt;/span&gt;', 12, '2017-06-01 08:21:43.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fce97b05d1.jpg'),
(22, '我这一辈子', '546', 210, '32.00', '30.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;《我这一辈子》选取了老舍先生的一些经典散文和中短篇作品。这些作品多取材于人们的日常生活，通过平凡的场景反映普遍的社会冲突，挖掘对人民生存、命运的思考。这些文章或描写城市平民的生活轨迹，或书写知识分子的生活趣事，或描摹各地的风土人情，其作品充满生活情趣，其文笔细致入微，极尽渲染之笔触，更贯穿着老舍先生一贯的幽默风格，让人从轻快诙谐之中体味人生哲思。&lt;/span&gt;', 11, '2017-06-01 08:23:30.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fcf026aac1.jpg'),
(23, '解忧杂货店', '4544', 321, '30.00', '28.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;日本作家东野圭吾的《解忧杂货店》，出版当年即获中央公论文艺奖。作品超越推理小说的范围，却比推理小说更加扣人心弦。&lt;/span&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;僻静的街道旁有一家杂货店，只要写下烦恼投进店前门卷帘门的投信口，第二天就会在店后的牛奶箱里得到回答：因男友身患绝症，年轻女孩静子在爱情与梦想间徘徊；克郎为了音乐梦想离家漂泊，却在现实中寸步难行；少年浩介面临家庭巨变，挣扎在亲情与未来的迷茫中……&lt;/span&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;他们将困惑写成信投进杂货店，奇妙的事情随即不断发生。生命中的一次偶然交会，将如何演绎出截然不同的人生？&lt;/span&gt;', 11, '2017-06-01 08:24:56.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fcf581a7dd.jpg'),
(24, '恋情的终结', '5645', 321, '35.00', '30.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;《恋情的终结》内容简介：这本书里有狂热的爱、狂热的恨、狂热的猜疑、狂热的嫉妒、狂热的信仰，有爱情中所有狂热的情感。关于爱情，我又想起了你……二战期间的英国伦敦，作家莫里斯爱上公务员亨利的妻子莎拉。一次意外事件导致萨拉不辞而别，莫里斯在恨和嫉妒中度过了两年。两年后，他们再次相遇，当初那段感情中炙热的爱、恨、猜疑、嫉妒、信仰，再度折磨着莫里斯。这段恋情最终如莫里斯所预言：变成了一桩有开始也有结束的风流韵事。莫里斯记述了爱情开始的时刻，以及最后的时刻。&lt;/span&gt;&lt;br /&gt;', 11, '2017-06-01 08:26:51.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fcfcbb5b7d.jpg'),
(25, '局外人 ', '4554', 325, '30.00', '28.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;★《局外人》记述了一个小人物，被司法机关“妖魔化”，深刻地讽刺了现代法律的虚伪和愚弄的实质。该书以一种客观记录式的“零度风格”，粗线条地描述了主人公默尔索在荒缪的世界中经历的种种事情，以及自身的荒诞体验。&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;★明确阐述了存在主义的重要命题：现代生活中人类社会的荒诞和陌生感导致个体的绝望与虚无。以一个小职员的真切感受揭示出了现代司法过程中的悖谬，深刻地讽刺了现代法律的虚伪和愚弄的实质。&lt;/span&gt;', 11, '2017-06-01 08:27:57.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fd00ddeb6c.jpg'),
(26, '追风筝的人', '3265', 200, '30.00', '24.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;《追风筝的人》内容简介：“许多年过去了，人们说陈年旧事可以被埋葬，然而我终于明白这是错的，因为往事会自行爬上来。回首前尘，我意识到在过去二十六年里，自己始终在窥视着那荒芜的小径。”&lt;/span&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;12岁的阿富汗富家少爷阿米尔与仆人哈桑情同手足。然而，在一场风筝比赛后，发生了一件悲惨不堪的事，阿米尔为自己的懦弱感到自责和痛苦，逼走了哈桑，不久，自己也跟随父亲逃往美国。&lt;/span&gt;', 11, '2017-06-01 08:29:19.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fd05fe5bf0.jpg'),
(27, '了不起的盖茨比', '5462', 110, '30.00', '27.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;《了不起的盖茨比》内容简介：一次偶然的机会，穷职员尼克闯入了挥金如土的大富翁盖茨比隐秘的世界，尼克惊讶地发现，盖茨比内心惟一的牵绊竟是河对岸那盏小小的绿灯——灯影婆娑中，住着心爱的旧情人黛熙。&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;盖茨比曾因贫穷而失去了黛熙，为了找回爱情，他不择一切手段成为有钱人，建起豪宅，只是想让昔日情人来小坐片刻。然而，冰冷的现实容不下缥缈的梦，真正的悲剧却在此时悄悄启幕……&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;《了不起的盖茨比》是世界文学史上“完美之书”，村上春树，海明威，塞林格疯狂迷恋。&lt;/span&gt;', 11, '2017-06-01 08:30:22.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fd09ee340c.jpg'),
(28, '未来简史', '4526', 50, '50.00', '44.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;《未来简史:从智人到智神》进入21世纪后，曾经长期威胁人类生存、发展的瘟疫、饥荒和战争已经被攻克，智人面临着新的待办议题：永生不老、幸福快乐和成为具有“神性”的人类。在解决这些新问题的过程中，科学技术的发展将颠覆我们很多当下认为无需佐证的“常识”，比如人文主义所推崇的自由意志将面临严峻挑战，机器将会代替人类做出更明智的选择。&lt;/span&gt;', 7, '2017-06-01 08:32:02.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fd1029e293.jpg'),
(29, '丝绸之路:一部全新的世界史', '54896', 213, '40.00', '35.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;《丝绸之路：一部全新的世界史》内容简介：从建立伊始，丝绸之路就始终主宰着人类文明的进程。丝绸之路让中国的丝绸和文明风靡全球；罗马和波斯在路边缔造了各自的帝国；佛教、基督教和伊斯兰教沿着丝绸之路迅速崛起并传遍世界，融汇出耶路撒冷三千年的历史；成吉思汗的蒙古铁蹄一路向西，在带来杀戮的同时促进了东西方文明的交融；大英帝国通过搜刮丝绸之路上的财富，铸就了日不落的辉煌；希特勒为了丝绸之路上的资源，将世界推入了战争和屠杀的深渊。&lt;/span&gt;', 7, '2017-06-01 08:33:06.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fd142ae392.jpg'),
(30, '人类简史:从动物到上帝', '4586', 123, '50.00', '48.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;《人类简史 从动物到上帝》是以色列新锐历史学家的一部重磅作品。从十万年前有生命迹象开始到21世纪资本、科技交织的人类发展史。十万年前，地球上至少有六个人种，为何今天却只剩下了我们自己？我们曾经只是非洲角落一个毫不起眼的族群，对地球上生态的影响力和萤火虫、猩猩或者水母相差无几。为何我们能登上生物链的顶端，最终成为地球的主宰？&lt;/span&gt;', 7, '2017-06-01 08:34:09.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fd181dc118.jpg'),
(31, '中国通史', '4589', 132, '55.00', '47.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;《中国通史》分上编下编，上编为十八章，以中国文化史为题，体论述自古以来中国社会的各个层面的发展，文化现象，内容包括婚姻、族制、政体、阶级、财产、官制、选举、赋税、兵制、刑法、实业、货币、衣食、住行、教育、语文、学术、宗教等十八类，囊括社会经济、政治体制、学术文化等各个方面；下编以中国政治史为题，下编为三十五章，则按照历史顺序串联，叙述了中国历代王朝的变迁，中国政治的变革。&lt;/span&gt;', 7, '2017-06-01 08:37:04.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fd2308ba19.jpg'),
(32, '万历十五年', '4586', 152, '40.00', '38.00', '&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;明万历十五年，即公元1587年，在中国历史上原本是极其普通的年份。作者以该年前后的史事件及生活在那个时代的人物为中心，抽丝剥茧，梳理了中国传统社会管理层面存在的种种问题，并在此基础上探索现代中国应当涉取的经验和教训。作者黄仁宇以其“大历史”观而闻名于世，《万历十五年》中这一观念初露头角，“叙事不妨细致，但是结论却要看远不顾近”。《万历十五年》自80年代初在中国大陆出版以来，好评如潮，在学术界和文化界有广泛的影响。&lt;/span&gt;&lt;br /&gt;\r\n&lt;span style=&quot;color:#333333;background-color:#FFFFFF;&quot;&gt;《万历十五年》意在说明16世纪中国社会的传统的历史背景，也就是尚未与世界潮流冲突时的侧面形态。有了这样一个历史的大失败，就可以保证冲突既开，恢复故态决无可能，因之而给中国留下了一个翻天覆地、彻底创造历史的机缘。&lt;/span&gt;', 7, '2017-06-01 08:38:27.000000', '/thinkphp/Public/Upload/Pro/2017-06-01/592fd283177c1.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `bookshop_user`
--

DROP TABLE IF EXISTS `bookshop_user`;
CREATE TABLE IF NOT EXISTS `bookshop_user` (
  `uid` mediumint(8) NOT NULL AUTO_INCREMENT,
  `user` char(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` char(32) NOT NULL,
  `name` char(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `bookshop_user`
--

INSERT INTO `bookshop_user` (`uid`, `user`, `password`, `email`, `name`) VALUES
(7, 'vivi', '123456', '789546245@qq.com', 'vivitao'),
(6, 'coco', '123456', '1458975632@qq.com', 'cocotao'),
(4, 'lily', '123456', '2365428956@qq.com', 'lilytao'),
(8, 'bobo', '123456', '45846259586@qq.com', 'bobotao');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
