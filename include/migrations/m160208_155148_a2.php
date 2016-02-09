<?php

use yii\db\Schema;
use yii\db\Migration;
use app\models\A2People;
use app\models\A2Tags;
use app\models\A2PeopleTags;

class m160208_155148_a2 extends Migration
{

    public function up()
    {
        $this->createTable('a2_people', [
            'id'        => $this->primaryKey(),
            'name'      => $this->string(100),
            'url'       => $this->string(300),
        ]);

        $this->createTable('a2_tags', [
            'id'        => $this->primaryKey(),
            'tag'       => $this->string(25),
        ]);

        $this->createTable('a2_people_tags', [
            'people_id'        => $this->integer(),
            'tag_id'           => $this->integer(),
        ]);

        $this->addPrimaryKey('a2_people_tags_pk', 'a2_people_tags', ['people_id', 'tag_id']);

        // news
        A2Tags::create('Reddit');
        A2Tags::create('Wall Street Journal');

        // mag
        A2Tags::create('Cycle World');
        A2Tags::create('Beer & Brewing');

        // tv
        A2Tags::create('Orange is the new Black');
        A2Tags::create('Game of Thrones');
        A2Tags::create('Junkyard Wars');
        A2Tags::create('How its Made');
        A2Tags::create('Top Gear');
        A2Tags::create('Firefly');
        A2Tags::create('Almost Human');
        A2Tags::create('Cowboys');
        A2Tags::create('Texas Aggies');

        // music
        A2Tags::create('Years & Years');
        A2Tags::create('Weezer');
        A2Tags::create('Maren Morris');
        A2Tags::create('Steve Moakler');
        A2Tags::create('Break Science');
        A2Tags::create('ASTR');
        A2Tags::create('MO');

        // categories
        A2Tags::create('News');
        A2Tags::create('Television');
        A2Tags::create('Music');

        // sub-categories
        A2Tags::create('Web');
        A2Tags::create('Magazine');
        A2Tags::create('Drama');
        A2Tags::create('Reality');
        A2Tags::create('Science Fiction');
        A2Tags::create('Sports');
        A2Tags::create('Indie/Alt');
        A2Tags::create('Country');
        A2Tags::create('Electronic');



        A2People::create('Saifil Ali', 'http://saifilali.weebly.com/');
        A2PeopleTags::create(1, 2);
        A2PeopleTags::create(1, 21);


        A2People::create('Nafe Alsawfta', 'http://nafealsawfta-csce445.weebly.com/');
        A2PeopleTags::create(2, 2);
        A2PeopleTags::create(2, 21);

        A2People::create('Chaitra Ambadipudi', 'http://chaitra-cpsc656.weebly.com/');
        A2PeopleTags::create(3, 22);
        A2PeopleTags::create(3, 21);
        A2PeopleTags::create(3, 26);

        A2People::create('Shantanu Bansal', 'http://people.tamu.edu/~shantanu88/');
        A2PeopleTags::create(4, 22);
        A2PeopleTags::create(4, 21);
        A2PeopleTags::create(4, 6);

        A2People::create('Alexander Berman', 'http://bermedia.jimdo.com/');
        A2PeopleTags::create(5, 22);
        A2PeopleTags::create(5, 23);
        A2PeopleTags::create(5, 29);

        A2People::create('William Bracho Blok', 'http://williambrachoblokcpscprofile.blogspot.com/');
        A2PeopleTags::create(6, 22);

        A2People::create('Chad Caddie', 'http://people.tamu.edu/~spyrochad/');
        A2PeopleTags::create(7, 23);
        A2PeopleTags::create(7, 22);
        A2PeopleTags::create(7, 26);
        A2PeopleTags::create(7, 32);

        A2People::create('Cesar Chavira', 'http://cec445.weebly.com/');
        A2PeopleTags::create(8, 22);
        A2PeopleTags::create(8, 23);
        A2PeopleTags::create(8, 13);
        A2PeopleTags::create(8, 29);

        A2People::create('Siddhartha Karthik Copesetty', 'http://cskarthik.wix.com/newmedia');
        A2PeopleTags::create(9, 22);
        A2PeopleTags::create(9, 29);

        A2People::create('Ashton Creel', 'http://www.cs-ashtoncreel.com/');
        A2PeopleTags::create(10, 22);
        A2PeopleTags::create(10, 23);
        A2PeopleTags::create(10, 5);
        A2PeopleTags::create(10, 6);
        A2PeopleTags::create(10, 26);
        A2PeopleTags::create(10, 29);
        A2PeopleTags::create(10, 30);

        A2People::create('Phillip Dang', 'http://people.tamu.edu/~phillipdang/');
        A2PeopleTags::create(11, 22);
        A2PeopleTags::create(11, 23);
        A2PeopleTags::create(11, 6);
        A2PeopleTags::create(11, 32);

        A2People::create('Ranbir Das', 'https://ranbirblog.wordpress.com/');
        A2PeopleTags::create(12, 2);
        A2PeopleTags::create(12, 6);
        A2PeopleTags::create(12, 23);
        A2PeopleTags::create(12, 1);
        A2PeopleTags::create(12, 26);

        A2People::create('Ranjita Das', 'http://thatsranjita.weebly.com/');
        A2PeopleTags::create(13, 22);
        A2PeopleTags::create(13, 6);

        A2People::create('Alexandria Davis', 'http://adavis-cnm.weebly.com/');
        A2PeopleTags::create(14, 23);
        A2PeopleTags::create(14, 22);
        A2PeopleTags::create(14, 30);
        A2PeopleTags::create(14, 28);

        A2People::create('Aurea Del Moral', 'https://sites.google.com/a/tamu.edu/adelmoral-csce656/');
        A2PeopleTags::create(15, 22);
        A2PeopleTags::create(15, 23);

        A2People::create('Nabir Dinani', 'http://www.nabirdinani.com/');
        A2PeopleTags::create(16, 22);
        A2PeopleTags::create(16, 23);
        A2PeopleTags::create(16, 21);
        A2PeopleTags::create(16, 2);
        A2PeopleTags::create(16, 28);

        A2People::create('Caio Duarte Diniz Monteiro', 'http://students.cse.tamu.edu/caioddm/656/');
        A2PeopleTags::create(17, 22);
        A2PeopleTags::create(17, 23);
        A2PeopleTags::create(17, 6);
        A2PeopleTags::create(17, 29);

        A2People::create('Chance Eckert', 'https://sites.google.com/site/chanceeckertpersonalpage/');
        A2PeopleTags::create(18, 22);
        A2PeopleTags::create(18, 23);
        A2PeopleTags::create(18, 15);
        A2PeopleTags::create(18, 24);
        A2PeopleTags::create(18, 28);
        A2PeopleTags::create(18, 30);

        A2People::create('Austin Elsik', 'http://people.tamu.edu/~austin_elsik/445/');
        A2PeopleTags::create(19, 24);
        A2PeopleTags::create(19, 28);

        A2People::create('Connor Flatt', 'http://students.cse.tamu.edu/cjf8625/');
        A2PeopleTags::create(20, 22);
        A2PeopleTags::create(20, 23);
        A2PeopleTags::create(20, 28);
        A2PeopleTags::create(20, 30);

        A2People::create('Timothy Foster', 'http://timothy445.wikidot.com/');
        A2PeopleTags::create(21, 23);

        A2People::create('Branden Frazer', 'http://bradenfrazer.github.io/445/index.html');
        A2PeopleTags::create(22, 22);
        A2PeopleTags::create(22, 1);
        A2PeopleTags::create(22, 24);
        A2PeopleTags::create(22, 29);

        A2People::create('Anurag Garg', 'https://anuraggargblog.wordpress.com/');
        A2PeopleTags::create(23, 22);
        A2PeopleTags::create(23, 6);
        A2PeopleTags::create(23, 23);

        A2People::create('Eric Gonzalez', 'http://ericgonzalez-csce445newmedia.weebly.com/');
        A2PeopleTags::create(24, 22);
        A2PeopleTags::create(24, 1);
        A2PeopleTags::create(24, 23);
        A2PeopleTags::create(24, 28);
        A2PeopleTags::create(24, 25);

        A2People::create('Aman Goyal', 'https://amancsce.wordpress.com/2016/01/24/why-computers-and-new-media/');
        A2PeopleTags::create(25, 24);
        A2PeopleTags::create(25, 21);
        A2PeopleTags::create(25, 22);
        A2PeopleTags::create(25, 23);

        A2People::create('Varinder Grewal', 'https://example69835.wordpress.com/');
        A2PeopleTags::create(26, 23);
        A2PeopleTags::create(26, 21);
        A2PeopleTags::create(26, 6);
        A2PeopleTags::create(26, 26);

        A2People::create('Austin Griffin', 'https://austingriffin445.wordpress.com/');
        A2PeopleTags::create(27, 23);

        A2People::create('Corey Hall', 'http://students.cse.tamu.edu/coreyh/');
        A2PeopleTags::create(28, 22);
        A2PeopleTags::create(28, 28);
        A2PeopleTags::create(28, 23);
        A2PeopleTags::create(28, 24);

        A2People::create('Seung Han', 'http://people.tamu.edu/~kevineleven7/');
        A2PeopleTags::create(29, 24);
        A2PeopleTags::create(29, 1);
        A2PeopleTags::create(29, 28);
        A2PeopleTags::create(29, 22);
        A2PeopleTags::create(29, 6);
        A2PeopleTags::create(29, 23);

        A2People::create('Jorge Herrera', 'http://cnm-jorgehc.weebly.com/');
        A2PeopleTags::create(30, 24);
        A2PeopleTags::create(30, 21);
        A2PeopleTags::create(30, 23);
        A2PeopleTags::create(30, 22);
        A2PeopleTags::create(30, 28);

        A2People::create('Yu Huang', 'http://people.tamu.edu/~elvia/');
        A2PeopleTags::create(31, 26);

        A2People::create('Jiyoung Hwang', 'https://ohnaryasite.wordpress.com/');
        A2PeopleTags::create(32, 24);
        A2PeopleTags::create(32, 22);
        A2PeopleTags::create(32, 26);

        A2People::create('James Jetton', 'http://people.tamu.edu/~spicyrhino/');
        A2PeopleTags::create(33, 22);
        A2PeopleTags::create(33, 24);
        A2PeopleTags::create(33, 28);
        A2PeopleTags::create(33, 29);
        A2PeopleTags::create(33, 21);
        A2PeopleTags::create(33, 27);
        A2PeopleTags::create(33, 23);

        A2People::create('Ivins Jove', 'http://people.tamu.edu/~jove_28/index.html');
        A2PeopleTags::create(34, 22);

        A2People::create('Jovana Dayan Juarez', 'http://people.tamu.edu/~jovanadayan2012/');
        A2PeopleTags::create(35, 22);
        A2PeopleTags::create(35, 26);

        A2People::create('Nicolas Juarez', 'http://nickj4.weebly.com/');
        A2PeopleTags::create(36, 24);
        A2PeopleTags::create(36, 23);

        A2People::create('Samaksh Kapoor', 'http://samakshkapoor.weebly.com/');
        A2PeopleTags::create(37, 22);
        A2PeopleTags::create(37, 29);
        A2PeopleTags::create(37, 6);
        A2PeopleTags::create(37, 24);
        A2PeopleTags::create(37, 23);

        A2People::create('Jonathan Kocmoud', 'http://jonathankocmoud.wix.com/home');
        A2PeopleTags::create(38, 28);
        A2PeopleTags::create(38, 22);
        A2PeopleTags::create(38, 23);
        A2PeopleTags::create(38, 31);

        A2People::create('Tristan Le', 'http://people.tamu.edu/~tle17/');
        A2PeopleTags::create(39, 22);
        A2PeopleTags::create(39, 26);
        A2PeopleTags::create(39, 28);
        A2PeopleTags::create(39, 23);
        A2PeopleTags::create(39, 1);

        A2People::create('Leon Lin', 'https://linsworks.wordpress.com/2016/01/28/cpsc-445-computers-and-new-media/');
        A2PeopleTags::create(40, 24);

        A2People::create('Malavika Madhukumar', 'https://sites.google.com/a/tamu.edu/malamadhukumar/computers-and-new-media');
        A2PeopleTags::create(41, 28);
        A2PeopleTags::create(41, 23);

        A2People::create('Sai Sujith Reddy Mankala', 'https://sites.google.com/a/tamu.edu/saisujithreddy656/');
        A2PeopleTags::create(42, 22);
        A2PeopleTags::create(42, 6);
        A2PeopleTags::create(42, 1);
        A2PeopleTags::create(42, 21);
        A2PeopleTags::create(42, 23);

        A2People::create('Nick Mankus', 'http://people.tamu.edu/~mankusnick93/445_webpage.html');
        A2PeopleTags::create(43, 24);
        A2PeopleTags::create(43, 1);
        A2PeopleTags::create(43, 22);
        A2PeopleTags::create(43, 23);
        A2PeopleTags::create(43, 30);

        A2People::create('Jose Manriquez', 'http://josemanriquez.com/csce445/');
        A2PeopleTags::create(44, 24);
        A2PeopleTags::create(44, 23);
        A2PeopleTags::create(44, 30);
        A2PeopleTags::create(44, 32);

        A2People::create('Alexandra Martinez', 'http://people.tamu.edu/~alliemart7/Martinez445/index.html');
        A2PeopleTags::create(45, 24);
        A2PeopleTags::create(45, 22);
        A2PeopleTags::create(45, 23);

        A2People::create('Allison Meagher', 'http://people.tamu.edu/~almeagher/445/');
        A2PeopleTags::create(46, 22);
        A2PeopleTags::create(46, 23);
        A2PeopleTags::create(46, 24);

        A2People::create('Yuning Miao', 'http://people.tamu.edu/~yuning.miao/');
        A2PeopleTags::create(47, 22);
        A2PeopleTags::create(47, 21);
        A2PeopleTags::create(47, 24);
        A2PeopleTags::create(47, 26);

        A2People::create('Mahak Mithani', 'http://www.mahakmithani.com/academics.html');
        A2PeopleTags::create(48, 24);
        A2PeopleTags::create(48, 22);

        A2People::create('Kathryn Moczygemba', 'http://students.cse.tamu.edu/kmm9844/');
        A2PeopleTags::create(49, 24);
        A2PeopleTags::create(49, 23);

        A2People::create('Santos Solorzano', 'http://santossolorzano.com/445/');
        A2PeopleTags::create(50, 29);

        A2People::create('Chris Nolan', 'https://about.me/nolanchristopher');

        A2People::create('Wesley Vance', 'http://wesadvance.mkyaljskvasjkn.com/contents/list-of-media');
        A2PeopleTags::create(52, 1);
        A2PeopleTags::create(52, 24);
        A2PeopleTags::create(52, 28);
        A2PeopleTags::create(52, 9);
        A2PeopleTags::create(52, 10);
        A2PeopleTags::create(52, 26);
        A2PeopleTags::create(52, 23);
        A2PeopleTags::create(52, 30);


    }
    public function down()
    {
        $this->dropTable('a2_people');
        $this->dropTable('a2_tags');
        $this->dropTable('a2_people_tags');
    }

}
