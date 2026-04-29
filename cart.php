<?php
$products = [
  // ── MANGA · SHONEN ──
  ['id'=>1, 'title'=>'Attack on Titan','author'=>'Hajime Isayama','genre'=>'Manga','sub'=>'Action · Dark Fantasy','tag'=>'shonen','price'=>12.99,'badge'=>'Bestseller','bg'=>'#1a0800','desc'=>'Humanity lives behind massive walls to protect themselves from the Titans. When the walls are breached, young Eren vows to fight back.','pages'=>193,'pub'=>'Kodansha','year'=>2009,'stock'=>14],
  ['id'=>2, 'title'=>'Demon Slayer','author'=>'Koyoharu Gotouge','genre'=>'Manga','sub'=>'Action · Supernatural','tag'=>'shonen','price'=>11.99,'badge'=>'Hot','bg'=>'#000b1a','desc'=>'Tanjiro\'s family is slaughtered by a demon. His sister Nezuko survives but transforms into one. He joins the Demon Slayer Corps to find a cure.','pages'=>192,'pub'=>'Shueisha','year'=>2016,'stock'=>20],
  ['id'=>3, 'title'=>'Jujutsu Kaisen','author'=>'Gege Akutami','genre'=>'Manga','sub'=>'Supernatural · Horror','tag'=>'shonen','price'=>11.99,'badge'=>'New','bg'=>'#08001a','desc'=>'Yuji Itadori swallows a cursed finger and becomes host to the most powerful cursed spirit. Now he must collect all of Sukuna\'s fingers.','pages'=>200,'pub'=>'Shueisha','year'=>2018,'stock'=>18],
  ['id'=>4, 'title'=>'One Piece','author'=>'Eiichiro Oda','genre'=>'Manga','sub'=>'Adventure · Fantasy','tag'=>'shonen','price'=>9.99,'badge'=>'','bg'=>'#001a00','desc'=>'Monkey D. Luffy stretches like rubber and dreams of finding the legendary treasure One Piece to become King of the Pirates.','pages'=>208,'pub'=>'Shueisha','year'=>1997,'stock'=>25],
  ['id'=>9, 'title'=>'Naruto','author'=>'Masashi Kishimoto','genre'=>'Manga','sub'=>'Action · Adventure','tag'=>'shonen','price'=>10.99,'badge'=>'Classic','bg'=>'#1a0f00','desc'=>'Naruto Uzumaki is a young ninja with a powerful fox demon sealed inside him. Shunned by his village, he dreams of becoming Hokage.','pages'=>192,'pub'=>'Shueisha','year'=>1999,'stock'=>30],

  // ── MANGA · SEINEN ──
  ['id'=>20,'title'=>'Berserk','author'=>'Kentaro Miura','genre'=>'Manga','sub'=>'Dark Fantasy · Action','tag'=>'seinen','price'=>14.99,'badge'=>'Must Read','bg'=>'#0f0005','desc'=>'Guts, a lone mercenary, wields a massive sword and battles demons in a brutal medieval world. A dark masterpiece of vengeance, fate, and humanity.','pages'=>240,'pub'=>'Young Animal','year'=>1989,'stock'=>12],
  ['id'=>21,'title'=>'Vagabond','author'=>'Takehiko Inoue','genre'=>'Manga','sub'=>'Historical · Drama','tag'=>'seinen','price'=>13.99,'badge'=>'','bg'=>'#0a0a00','desc'=>'A stunning retelling of the life of legendary swordsman Miyamoto Musashi. Inoue\'s breathtaking artwork brings feudal Japan to vivid life.','pages'=>208,'pub'=>'Kodansha','year'=>1998,'stock'=>9],

  // ── MANGA · SHOJO ──
  ['id'=>22,'title'=>'Fruits Basket','author'=>'Natsuki Takaya','genre'=>'Manga','sub'=>'Romance · Fantasy','tag'=>'shojo','price'=>10.99,'badge'=>'','bg'=>'#0a001a','desc'=>'Tohru Honda discovers the Sohma family\'s secret: they transform into animals of the Chinese zodiac when hugged by the opposite sex. A beloved classic.','pages'=>192,'pub'=>'Hakusensha','year'=>1999,'stock'=>17],
  ['id'=>23,'title'=>'Sailor Moon','author'=>'Naoko Takeuchi','genre'=>'Manga','sub'=>'Magical Girl · Action','tag'=>'shojo','price'=>10.99,'badge'=>'Classic','bg'=>'#00001a','desc'=>'Usagi Tsukino transforms into Sailor Moon to defend Earth from dark forces. A defining series that shaped the magical girl genre worldwide.','pages'=>240,'pub'=>'Kodansha','year'=>1992,'stock'=>22],

  // ── MANGA · ISEKAI ──
  ['id'=>24,'title'=>'Sword Art Online','author'=>'Reki Kawahara','genre'=>'Manga','sub'=>'Isekai · Action','tag'=>'isekai','price'=>11.99,'badge'=>'','bg'=>'#001a1a','desc'=>'Thousands of players are trapped inside a virtual reality MMO. The only way out is to beat the game — but dying in-game means dying in real life.','pages'=>180,'pub'=>'ASCII Media Works','year'=>2012,'stock'=>15],
  ['id'=>25,'title'=>'Re:Zero','author'=>'Tappei Nagatsuki','genre'=>'Manga','sub'=>'Isekai · Dark Fantasy','tag'=>'isekai','price'=>12.99,'badge'=>'Hot','bg'=>'#00100a','desc'=>'Subaru Natsuki is suddenly transported to a fantasy world — and discovers he has the power to return from death. Every death rewinds time.','pages'=>192,'pub'=>'Square Enix','year'=>2014,'stock'=>11],

  // ── MANGA · HORROR ──
  ['id'=>26,'title'=>'Uzumaki','author'=>'Junji Ito','genre'=>'Manga','sub'=>'Horror · Psychological','tag'=>'horror','price'=>27.99,'badge'=>'Staff Pick','bg'=>'#050505','desc'=>'A town becomes obsessed with spirals. Junji Ito\'s hypnotic spiral imagery builds into one of the most disturbing horror stories ever put to page.','pages'=>648,'pub'=>'Shogakukan','year'=>1998,'stock'=>8],
  ['id'=>27,'title'=>'Parasyte','author'=>'Hitoshi Iwaaki','genre'=>'Manga','sub'=>'Horror · Sci-Fi','tag'=>'horror','price'=>13.99,'badge'=>'','bg'=>'#0a1000','desc'=>'Alien parasites invade Earth and take over human brains. One parasite fails to reach Shinichi\'s brain and bonds with his hand instead. A tense battle for survival.','pages'=>300,'pub'=>'Kodansha','year'=>1988,'stock'=>14],

  // ── AMERICAN · SUPERHERO ──
  ['id'=>5, 'title'=>'Batman: Year One','author'=>'Frank Miller','genre'=>'American','sub'=>'Superhero · Crime','tag'=>'dc','price'=>16.99,'badge'=>'Classic','bg'=>'#08081a','desc'=>'Frank Miller\'s seminal retelling of Batman\'s origin. Bruce Wayne returns to Gotham and begins his war on crime alongside a young James Gordon.','pages'=>144,'pub'=>'DC Comics','year'=>1987,'stock'=>9],
  ['id'=>6, 'title'=>'Saga Vol. 1','author'=>'Brian K. Vaughan','genre'=>'American','sub'=>'Sci-Fi · Epic','tag'=>'indie','price'=>14.99,'badge'=>'Staff Pick','bg'=>'#001010','desc'=>'Two soldiers from opposite sides of a galactic war fall in love and have a child. Now every army and bounty hunter in the galaxy is hunting them.','pages'=>160,'pub'=>'Image Comics','year'=>2012,'stock'=>11],
  ['id'=>7, 'title'=>'X-Men: Dark Phoenix','author'=>'Chris Claremont','genre'=>'American','sub'=>'Superhero · Drama','tag'=>'marvel','price'=>19.99,'badge'=>'Classic','bg'=>'#1a0000','desc'=>'Jean Grey merges with the cosmic Phoenix Force and becomes the most powerful being in the universe — until darkness takes hold.','pages'=>248,'pub'=>'Marvel Comics','year'=>1980,'stock'=>7],
  ['id'=>8, 'title'=>'Watchmen','author'=>'Alan Moore','genre'=>'American','sub'=>'Superhero · Noir','tag'=>'dc','price'=>24.99,'badge'=>'Must Read','bg'=>'#0a0a00','desc'=>'In an alternate 1985, a murder mystery unravels a global conspiracy. Alan Moore\'s masterpiece deconstructs the superhero genre.','pages'=>416,'pub'=>'DC Comics','year'=>1986,'stock'=>12],
  ['id'=>10,'title'=>'Iron Man: Extremis','author'=>'Warren Ellis','genre'=>'American','sub'=>'Superhero · Sci-Fi','tag'=>'marvel','price'=>17.99,'badge'=>'','bg'=>'#1a0500','desc'=>'When a biotech weapon called Extremis is unleashed, Tony Stark must push the limits of his armor — and himself — to stop it.','pages'=>152,'pub'=>'Marvel Comics','year'=>2005,'stock'=>13],
  ['id'=>11,'title'=>'The Amazing Spider-Man','author'=>'Stan Lee','genre'=>'American','sub'=>'Superhero · Action','tag'=>'marvel','price'=>15.99,'badge'=>'Icon','bg'=>'#1a0008','desc'=>'With great power comes great responsibility. Peter Parker balances high school life with being New York\'s friendly neighborhood Spider-Man.','pages'=>176,'pub'=>'Marvel Comics','year'=>1963,'stock'=>16],
  ['id'=>12,'title'=>'The Flash: Rebirth','author'=>'Geoff Johns','genre'=>'American','sub'=>'Superhero · Adventure','tag'=>'dc','price'=>16.99,'badge'=>'','bg'=>'#1a0800','desc'=>'Barry Allen, the fastest man alive, returns from the dead. But something is wrong — the Speed Force itself is killing speedsters.','pages'=>168,'pub'=>'DC Comics','year'=>2009,'stock'=>10],
  ['id'=>13,'title'=>'Avengers: Secret Wars','author'=>'Jonathan Hickman','genre'=>'American','sub'=>'Superhero · Epic','tag'=>'marvel','price'=>29.99,'badge'=>'New','bg'=>'#000d1a','desc'=>'The Marvel multiverse collapses. Every reality destroyed. Only Battleworld remains — ruled by God Doom. The ultimate Marvel event.','pages'=>240,'pub'=>'Marvel Comics','year'=>2015,'stock'=>8],

  // ── AMERICAN · SCI-FI ──
  ['id'=>30,'title'=>'Star Wars: Darth Vader','author'=>'Kieron Gillen','genre'=>'American','sub'=>'Sci-Fi · Space Opera','tag'=>'scifi','price'=>19.99,'badge'=>'Bestseller','bg'=>'#000510','desc'=>'Following the destruction of the Death Star, Darth Vader must deal with his failures. A stunning character study of the galaxy\'s most feared villain.','pages'=>168,'pub'=>'Marvel Comics','year'=>2015,'stock'=>18],
  ['id'=>31,'title'=>'Star Wars: A New Hope','author'=>'Roy Thomas','genre'=>'American','sub'=>'Sci-Fi · Adventure','tag'=>'scifi','price'=>16.99,'badge'=>'Classic','bg'=>'#02000f','desc'=>'The original Marvel Comics adaptation of the film that started it all. Luke Skywalker, Han Solo, and Princess Leia fight to restore freedom to the galaxy.','pages'=>144,'pub'=>'Marvel Comics','year'=>1977,'stock'=>10],
  ['id'=>32,'title'=>'The Mandalorian','author'=>'Rodney Barnes','genre'=>'American','sub'=>'Sci-Fi · Western','tag'=>'scifi','price'=>21.99,'badge'=>'New','bg'=>'#0a0800','desc'=>'A lone bounty hunter navigates the outer reaches of the galaxy, far from the authority of the New Republic — and protects a mysterious child.','pages'=>152,'pub'=>'Marvel Comics','year'=>2022,'stock'=>14],
  ['id'=>33,'title'=>'Turgut\'s Playhouse','author'=>'Jima\'s Emporium','genre'=>'American','sub'=>'Indie · Slice of Life','tag'=>'indie','price'=>12.99,'badge'=>'Exclusive','bg'=>'#0d0a1a','desc'=>'A vibrant and imaginative indie comic following Turgut, a larger-than-life character navigating the chaos of everyday life with humor, heart, and a cast of unforgettable friends. A love letter to the indie comic scene.','pages'=>128,'pub'=>'Jima\'s Emporium Press','year'=>2025,'stock'=>25],
];

function get_product($id) {
  global $products;
  foreach ($products as $p) { if ($p['id']==(int)$id) return $p; }
  return null;
}

function get_by_genre($genre) {
  global $products;
  return array_values(array_filter($products, fn($p) => $p['genre']===$genre));
}

function get_by_tag($tag) {
  global $products;
  return array_values(array_filter($products, fn($p) => ($p['tag']??'')===$tag));
}
?>
