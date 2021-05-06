echo "ADMIN:"
echo '$u = new \App\Models\User;$u->name = "admin";$u->email = "admin@test.com";$u->password = Hash::make("admin123");$u->token = hash("sha256", "admin123");$u->role = "admin";$u->firstname = "admin"; $u->lastname1 = "example1";$u->lastname2 = "example2";$u->save();'
echo ''
echo 'USER:'
echo '$u = new \App\Models\User;$u->name = "test";$u->email = "test@test.com";$u->password = Hash::make("test123");$u->token = hash("sha256", "test123");$u->firstname = "test";$u->lastname1 = "example1";$u->lastname2 = "example2"; $u->save();'
php artisan tinker


$u = new \App\Models\Genre;$u->name = "genres";$u->description = "hola"; $u->save();

$u = new \App\Models\Platform;$u->name = "Microsoft";$u->logo = null; $u->save();

$u = new \App\Models\Gconsole;$u->name = "XboxOne";$u->platform_id = 1; $u->save();

$u = new \App\Models\Message;$u->message = "nueva";$u->save();

$u = new \App\Models\Friend;$u->user_id = 116;$u->friend_id = 115;$u->message_id=1;$u->state=1;$u->save();

$u = new \App\Models\Comment;$u->comment = "nueva";$u->ratingscore=1;$u->save();

$u = new \App\Models\Score;$u->totalscore = 1;$u->numbervotes=1;$u->score=1;$u->comment_id=1;$u->save();

$u = new \App\Models\Director;$u->name ="adrian";$u->save();

$u = new \App\Models\Developer;$u->name ="EA";$u->director_id=1;$u->save();

$u = new \App\Models\Publisher;$u->name = "Ubisoft"; $u->save();

$u = new \App\Models\Game;$u->name = "AssassinsCreed"; $u->genres_id=1; $u->developer_id=1; $u->director_id=1; $u->gconsoles_id=1;$u->date="2015-09-22 07:16:06"; $u->pegi="3"; $u->publisher_id=1;$u->summary="sumary";$u->page_reference="wikipedia";$u->image="imagen AssassinCred";$u->save();

$u = new \App\Models\Saga;$u->name = "Assassins Cread";$u->game_id=1;$u->save();

$u = new \App\Models\Liste;$u->visibility=0;$u->name="lista";$u->gamelist_id=1;$u->save();

$ php artisan make:controller GameController --resource --model=Game

