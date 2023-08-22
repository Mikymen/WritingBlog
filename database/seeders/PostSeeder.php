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
          DB::table('posts')->insert([
            'title' => 'Bolivian customs',
            'body' => '<p><img alt="" src="https://uploads.exoticca.com/en_CA/destination/country/bolivia-gastronomy.png" style="float:right; margin-left:20px; margin-right:20px" />My country has a variety of customs and traditions that are appreciated by tourists. I&rsquo;m talking about Bolivian culture. It is a beautiful country for sightseeing, isn&#39;t it? Of course it is. But you have to stay informed before visiting it. Like other countries, Bolivia has some different customs compared to European or Asian countries. In etiquette, we have some rules regarding greeting someone. You should always handshake to men when you meet them, in the case of women you can also shake hands or give a kiss on the cheek, no matter if you meet in a formal or informal way, that&rsquo;s a nice custom, isn&rsquo;t it?. About table manners, there are some rules you can follow before leaving the table, for example, you can&rsquo;t stand up to leave until all persons finish the meal, and you always have to say thanks to everyone or each one of the persons in the table, had you heard about it in other countries? If you don&rsquo;t follow these rules you can seem offensive or impolite. But I warn you if you plan a meeting for a dinner or a party you should know Bolivian people are very unpunctual, this would be annoying for you, wouldn&#39;t it? So I recommend you to be patient with the times. Had you greeted some locals before reading this article? I hope this is useful for you when you visit Bolivia. Most people here are kind and polite, aren&rsquo;t they? Don&rsquo;t forget to try some local dishes.</p>

            <p>Miguel Mendieta</p>
            
            <p>&nbsp;</p>',
            'conver_image' => 'noimage.jpg',
            'user_id' => 1,
            'created_at' => '2023-05-22 00:08:41',
            'updated_at' => '2023-05-22 00:09:24'
          ]);
          DB::table('posts')->insert([
            'title' => 'Salvador Dali',
            'body' => '<p><img alt="" src="https://is1-ssl.mzstatic.com/image/thumb/Purple123/v4/38/5e/2d/385e2d1b-a903-122d-3712-ef6aa27d6f08/source/256x256bb.jpg" style="border-style:solid; border-width:20px; float:left; margin-left:20px; margin-right:20px" />I will talk about <strong>Salvador Dali</strong>. He was a famous artist born in Spain in 1904, he represented the surrealist cultural movement. He was well known for making shocking paintings and surreal images with a lot of imagination. He was influenced by Renaissance art, and he was also an expert in drawing.</p>

            <p>In 1922, he started his art studies at the <em>Real Academia De Bellas Artes de San Fernando</em>. He had eccentric behavior and unique fashion, like long hair and a long coat. After two years, he was arrested and sent to prison for 12 days without a reason.</p>
            
            <p>In 1931, Dali painted one of his greatest works of art <em>&quot;La persistencia de la memoria&quot;</em>, which rejected the ideas of the time.</p>
            
            <p>He mastered a lot of different techniques, such as drawing, painting, sculpture, engraving, writing, and filmmaking.</p>',
            'conver_image' => 'noimage.jpg',
            'user_id' => 1,
            'created_at' => '2023-06-23 00:08:41',
            'updated_at' => '2023-06-23 00:09:24'
          ]);
          DB::table('posts')->insert([
            'title' => 'Internet in my life',
            'body' => '<p><img alt="" src="https://media.istockphoto.com/id/1353300171/vector/social-media-creative-idea-realistic-3d-design-concept-online-social-network-business.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=slTk6rAix_roaNDJA6kZiNQG5f0-dY-0yXqsLp2OfJY=" style="float:right; height:231px; margin:1px 20px; width:300px" /></p>

            <p>Nowadays, the Internet service is essential to everyone; it opens a wide range of possibilities, such as getting information, seeing videos, listening to music, talking with others, and much more.<br />
            <br />
            When I was at the academy, the Internet was one of the most important tools to consult information instead of old and outdated books, so I preferred to spend some time at the internet cafe near the academy. Today, I use it to search for something useful to improve my knowledge related to my profession. There are a lot of videos, tutorials, blogs, and courses available for students and professionals. If we take the 2000s, there wasn&#39;t nearly as much information as we have today, and every year new information appears.<br />
            <br />
            A lot of people use the internet to do everything. This tool is changing the way we live, and I hope that will be better for the next generation.</p>',
            'conver_image' => 'noimage.jpg',
            'user_id' => 1,
            'created_at' => '2023-06-24 00:08:41',
            'updated_at' => '2023-06-24 00:09:24'
          ]);

            DB::table('posts')->insert([
            'title' => 'Bonorum et Malorum',
            'body' => '<img alt="" src="https://picsum.photos/seed/picsum/400/280" style="float:left; height:250px; margin-left:20px; margin-right:20px; width:357px" />Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC

            <p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>',
            'conver_image' => 'noimage.jpg',
            'user_id' => 2,
            'created_at' => '2023-05-25 00:08:41',
            'updated_at' => '2023-05-25 00:09:24'
          ]);
          DB::table('posts')->insert([
            'title' => '1914 translation by H. Rackham',
            'body' => '<p><img alt="" src="https://picsum.photos/id/3/300/200" style="float:right; height:200px; margin-left:20px; margin-right:20px; width:300px" />&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>',
            'conver_image' => 'noimage.jpg',
            'user_id' => 2,
            'created_at' => '2023-05-26 00:08:41',
            'updated_at' => '2023-05-26 00:09:24'
          ]);
        //   DB::table('posts')->insert([
        //     'title' => '',
        //     'body' => '',
        //     'conver_image' => 'noimage.jpg',
        //     'user_id' => 1,
        //     'created_at' => '2023-05-21 00:08:41',
        //     'updated_at' => '2023-05-21 00:09:24'
        //   ]);
    }
}
