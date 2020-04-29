<?php

use Illuminate\Database\Seeder;

class LyricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lyrics')->insert([

            ['id' => '1', 'song_id' => '16', 'content' => "
                Feeling my way through the darkness
                Guided by a beating heart
                I can't tell where the journey will end
                But I know where to start
                They tell me I'm too young to understand
                They say I'm caught up in a dream
                Well life will pass me by if I don't open up my eyes
                Well that's fine by me
                So wake me up when it's all over
                When I'm wiser and I'm older
                All this time I was finding myself
                And I didn't know﻿ I was lost
                So wake me up when it's all over
                When I'm wiser and I'm older
                All this time I was finding myself
                And I didn't know﻿ I was lost
                I tried carrying the weight of the world
                But I only have two hands
                I hope I get the chance to travel the world
                But I don't have any plans
                I wish that I could stay forever this young
                Not afraid to close my eyes
                Life's a game﻿ made for…
            "],

            ['id' => '2', 'song_id' => '4', 'content' => "
                [Verse 1]
                We were young, posters on the wall
                Praying we're the ones that the teacher wouldn't call
                We would stare at each other
                'Cause we were always in trouble
                And all the cool kids did their own thing
                I was on the outside always looking in
                Yeah, I was there but I wasn't
                They never really cared if I wasn't
                
                We all need that someone who gets you like no one else
                Right when you need it the most
                We all need a soul to rely on, a shoulder to cry on
                A friend through the highs and the lows

                I'm not gonna make it a-la, la-la-la-la-la, la, la-la-la-la-la, 'lone
                I'm not gonna make it a-la, la-la-la-la-la, la, la-la-la-la-la, 'lone
                
                Then I saw your face, your forgiving eyes
                Looking back at me from the other side
                Like you understood me
                And I'm never letting you go, oh
                
                We all need that someone who gets you like no one else
                Right when you need it the most
                We all need a soul to rely on, a shoulder to cry on
                A friend through the highs and the lows
                
                I'm not gonna make it a-la, la-la-la-la-la, la, la-la-la-la-la, 'lone
                I'm not gonna make it a-la, la-la-la-la-la, la, la-la-la-la-la, 'lone
                I'm not gonna make it a-la, la-la-la-la-la, la, la-la-la-la-la, 'lone
                I'm not gonna make it a-la, la-la-la-la-la, la, la-la-la-la-la, 'lone
                
                I'm not gonna make it alone La, la-la-la-la-la, 'lone
                I'm not gonna make it a-la, la-la-la-la-la, la, la-la-la-la-la, 'lone
                
                'Cause you are that someone that gets me like no one else
                Right when I need it the most
                And I'll be the one you rely on, a shoulder to cry on
                A friend through the highs and the lows
                
                I'm not gonna make it a-la, la-la-la-la-la, la, la-la-la-la-la, 'lone
                I'm not gonna make it a-la, la-la-la-la-la, la, la-la-la-la-la, 'lone
                I'm not gonna make it a-la, la-la-la-la-la, la, la-la-la-la-la, 'lone
                I'm not gonna make it a-la, la-la-la-la-la, la, la-la-la-la-la, 'lone
                I'm not gonna make it alone
            "],
            
            ['id' => '3', 'song_id' => '9', 'content' => "
                I seen the look in your face
                Telling me a story
                You don't have to be alone
                I love to see you smiling
                Why you try to hide it?
                Don't you know you've got it all?
                I know when you're gone
                You do your thing
                And you live like you want
                I know when you're gone
                You're just looking for a little sign of love
                I said hey
                Won't you come with me?
                I said hey, hey
                Hey, won't you stay with me?
                I said hey, hey
                I said hey
                Won't you come with me?
                I said hey, hey
                Hey, won't you stay with me?
                I said hey, hey
                See the way you moving
                No need for introducing
                You're everything a man could want
                You and I, we both know
                Only one with this course
                Baby let me take you home
                I know when you're gone
                You do your thing
                And you live like you want
                I know when you're gone
                All you're…
            "],
        ]);
    }
}
