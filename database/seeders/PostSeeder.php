<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Welcome to Bolivia',
            'body' => '<p><img alt="" src="https://media.istockphoto.com/id/466434202/photo/view-of-potosi-bolivia.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=EKIm7z_J3r38h3EzyrIKHo4ECbwB_UbWFBXUWHey1nU=" style="float:left; height:409px; margin-left:20px; margin-right:20px; width:612px" /></p>

            <p>Dear reader:</p>
            
            <p>Welcome in advance, I hope you enjoy your travel to my country. There are a lot of things you might know before get in contact with local people, but I will tell you the most relevant customs here what people see as polite behavior. At the first meeting, I recommend you greet each person with a handshake and address them by the title or the family name. I remember you had already known it when you traveled to Peru, it is the same for us. Another custom here is at lunch time, maybe you hadn&#39;t heard yet but people could feel offended if you reject the meal. I suggest you first ask for the meal if you have a distinct diet or if you don&#39;t used to eat chili food, because here in Bolivia the chili is the principal ingredient in local dishes. Last, there are some topics that they consider taboo, like marriage topics of the same genre, abortion, transexual topics. Despite of all, people here are kind and polite. Also, if you have free time, you would like to go sightseeing in the city and take pictures. I hope you will feel very comfortable with the hotel and the services that I chose for you.</p>
            
            <p><br />
            Cordially<br />
            Miguel Mendieta</p>',
            'conver_image' => 'noimage.jpg',
            'user_id' => 1,
            'created_at' => '2023-05-21 00:08:41',
            'updated_at' => '2023-05-21 00:09:24'
          ]);
    }
}
