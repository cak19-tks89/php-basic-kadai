<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
    // クラスを定義する
    class Food {
        // プロパティを定義する
        private $name;
        private $price;
        // コンストラクタを定義する
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
        //メソッド定義
        public function show_price(int $price){
            echo '<br>' . $this->price;
        }
    }

    class Animal {
        // プロパティを定義する
        private $name;
        private $height;
        private $weight;
        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
        //メソッド定義
        public function show_height(int $height){
            echo '<br>' . $this->height;
        }
    }

    // インスタンス化する
    $food = new Food('おにぎり', 200);
    $animal = new Animal('ねこ', 93,400);
    // インスタンスの各プロパティ値出力
    print_r ($food);
    echo '<br>';
    print_r ($animal);
    // メソッドへアクセス
    $food->show_price(200);
    $animal->show_height(93);

    ?>
    </p>
</body>

</html>