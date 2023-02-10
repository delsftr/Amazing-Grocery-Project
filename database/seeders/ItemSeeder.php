<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        [
            'item_name' => 'Brokoli',
            'item_desc' => 'Brokoli merupakan jenis sayuran yang sudah sangat mendunia. Sayuran ini banyak dipakai oleh koki untuk mempercantik makanan karena bentuknya yang cukup unik seperti pohon dalam ukuran kecil. Di samping itu, rasa brokoli juga sangat renyah dan gurih. Kamu bisa jadikan brokoli sebagai menu makanan sehat untuk seluruh anggota keluarga.',
            'price' => 12000
        ],
        [
            'item_name' => 'Kangkung',
            'item_desc' => 'Kangkung juga menjadi salah satu sayur yang cukup digemari masyarakat. Sayur kangkung digunakan untuk menu gado-gado dan pecel. Konon katanya, jenis sayur ini mampu meningkatkan hormon yang membantu tubuh lebih rileks.',
            'price' => 130000
        ],
        [
            'item_name' => 'Tauge',
            'item_desc' => 'Jenis sayur yang satu ini pun cukup populer di banyak menu makanan. Kamu bisa menumis atau merebus tauge untuk dapatkan makanan enak yang menyehatkan. Tauge pun bisa dijumpai di menu ketoprak, soto, bakso, dan rawon.',
            'price' => 14000
        ],
        [
            'item_name' => 'Sawi',
            'item_desc' => 'Jenis sayur hijau yang satu ini punya rasa yang cukup pahit. Namun, penggunaannya malah sangat dibutuhkan dalam beberapa masakan. Rasa pahit dari sawi mampu menetralkan rasa gurih yang berlebihan dalam makanan. Tidak heran jika sawi dipakai di kedai untuk menu mi instan atau bakso.',
            'price' => 15000
        ],
        [
            'item_name' => 'Seledri',
            'item_desc' => 'Mungkin seledri hanya berfungsi sebagai bahan tambahan dalam makanan. Penggunaanya hanya ditaburkan setelah makanan siap disantap. Namun, daun seledri ini punya khasiat yang cukup banyak untuk tubuh. Manfaatnya bisa membantu menjaga tekanan darah dan mencegah pertumbuhan sel kanker dalam tubuh.',
            'price' => 16000
        ],
        [
            'item_name' => 'Buncis',
            'item_desc' => 'Buncis merupakan jenis sayuran yang memiliki serat tinggi. Di samping itu, sayur ini juga punya kandungan vitamin yang cukup banyak. Mengonsumsi buncis secara rutin pun bisa menurunkan risiko penyakit jantung, loh. Kamu pun bisa mengolah buncis dengan lebih mudah karena rasa sayur ini terbilang sudah sangat gurih.',
            'price' => 17000
        ],
        [
            'item_name' => 'Selada',
            'item_desc' => 'Kamu bisa mengonsumsi selada tanpa diolah terlebih dulu. Cukup mencucinya hingga bersih dengan air dingin untuk dapatkan kesegaran dari sayuran ini. Selada bisa disajikan dengan campuran daging ayam dan sapi. Kamu bisa bisa mencocolnya dengan berbagai jenis sambal untuk dapatkan cita rasa yang lezat.',
            'price' => 18000
        ],
        [
            'item_name' => 'Kemangi',
            'item_desc' => 'Kemangi menjadi salah satu jenis sayur yang menjadi favorit menu lalapan. Daun ini memiliki punya sensasi rasa yang unik di lidah. Kamu pun bisa menjadikan daun kemangi sebagai penambah aroma masakan. Bukan hanya itu, daun kemangi pun bisa dipakai untuk mencuci tangan dan menghilangkan aroma amis setelah makan.',
            'price' => 19000
        ],
        [
            'item_name' => 'Pakcoi',
            'item_desc' => 'Sayur pakcoi paling sering dijumpai di sajian chinese food. Pakcoi bisa ditumis bersama bawang putih untuk jadi santapan sehat setiap hari. Bagian batang sayur ini sangat renyah dan tidak mudah layu biarpun dimasak.',
            'price' => 20000
        ],
        [
            'item_name' => 'Pare',
            'item_desc' => 'Pare merupakan salah satu jenis sayur buah yang sangat menyehatkan. Kandungan di dalamnya bisa membantu menurunkan kadar gula darah dan kolesterol. Namun, rasa pare sangat pahit dan mungkin beberapa orang akan tidak suka dengan rasanya. Kamu perlu menambahkan sambal goreng atau sambal kacang untuk menetralkan rasanya.',
            'price' => 21000
        ],
        [
            'item_name' => 'Kale',
            'item_desc' => 'Kale merupakan jenis sayuran yang paling menyehatkan di seluruh dunia. Kandungan nutrisinya sangat kaya dan manfaatnya pun cukup beragam. Sayur kale biasa dijadikan campuran makanan untuk diet. Kamu pun bisa mencampur kale dengan sayur dan buah-buahan untuk dijadikan jur.',
            'price' => 22000
        ],
        [
            'item_name' => 'Kol',
            'item_desc' => 'Sayur yang satu ini mirip dengan brokoli. Jika brokoli berwarna hijau, kembang kol memiliki warna putih pada bagian bunganya. Kamu bisa mengolah sayur ini dengan cara direbus dan dicampur ke dalam sup. Tidak ada salahnya juga mencoba resep kembang kol tepung goreng untuk menu camilan kala santai.',
            'price' => 23000
        ]
        ];

        Item::insert($data);
    }
}
