<?php
    class product {
        protected $name;
        protected $price;
        protected $discount;

        public function __construct($name, $price, $discount) {
            $this -> name = $name;
            $this -> price = $price;
            $this -> discount = $discount;
        }

        public function getPrice() {
            return $this -> price;
        }

        public function setPrice($price) {
            $this -> price = $price; 
        }

        public function getName() {
            return $this -> name;
        }

        public function setName($name) {
            $this -> name = $name;
        }
        
        public function getDiscount() {
            return $this -> discount;
        }

        public function setDiscount($discount) {
            $this -> discount = $discount;
        }

        public function discountPrice() {
            $jumlahDicount = $this -> price * $this -> discount / 100;
            $hargaDiscount = $this -> price - $jumlahDicount;
            return $hargaDiscount;
        }
    }

    class CDMusic extends product {
        protected $artist;
        protected $genre;

        public function __construct($name, $price, $discount, $discount2, $artist, $genre) {
            parent :: __construct($name, $price, $discount);
            $this -> artist = $artist;
            $this -> genre = $genre;
            $this -> discount2 = $discount2;
        }

        public function getArtist() {
            return $this -> artist;
        }

        public function setArtist($artist) {
            $this -> artist = $artist;
        }

        public function getGenre() {
            return $this -> genre;
        }

        public function setGenre($genre) {
            $this -> genre = $genre;
        }

        public function getPrice() {
            return $this -> price;
        }       
        
        public function getDiscount() {
            return $this -> discount;
        }

        public function getDiscount2() {
            return $this -> discount2;
        }

        public function discountPrice() {
            $discountprice = $this -> getPrice() + ($this -> getPrice() * $this -> getDiscount());
            return $discountprice;
        }

        public function discountPrice2() {
            $discountprice2 = $this -> discountPrice() - ($this -> getPrice() * $this -> getDiscount2());
            return $discountprice2;
        }
    }

    class CDRack extends product {
        protected $capacity;
        protected $model;

        public function __construct($name, $price, $discount, $discount2, $capacity, $model) {
            parent :: __construct($name, $price, $discount);
            $this -> capacity = $capacity;
            $this -> model = $model;
            $this -> discount2 = $discount2;
        }

        public function getCapacity() {
            return $this -> capacity;
        }

        public function setCapacity($capacity) {
            $this -> capacity = $capacity;
        }

        public function getModel() {
            return $this -> model;
        }

        public function setModel($model) {
            $this -> model = $model;
        }

        public function getPrice() {
            return $this -> price;
        }     

        public function getDiscount2() {
            return $this -> discount2;
        }
        
        public function discountPrice() {
            $discountprice = $this -> getPrice() + ($this -> getPrice() * $this -> getDiscount());
            return $discountprice;
        }

        public function discountPrice2() {
            $discountprice2 = $this -> discountPrice() - ($this -> getPrice() * $this -> getDiscount2());
            return $discountprice2;
        }
    }

    // Membuat objek Product
    $product = new Product("The Wonder of You", 150000, 0);
    echo "PRODUCT" . "<br>";
    echo "Name : " . $product -> getName() . "<br>";
    echo "Price : " . $product -> getPrice() . "<br>";
    echo "Discount : " . $product -> getDiscount() . "%<br><br>";

    // Membuat objek CDMusic
    $cd = new CDMusic("The Wonder of You", 150000, 0.1, 0.05, "Elvis Presley", "Pop");
    echo "CD MUSIC" . "<br>";
    echo "Name : " . $cd->getName() . "<br>";
    echo "Price : " . $cd->discountPrice() . "<br>";
    echo "Discount : " . $cd->getDiscount2() * 100 . "%<br>";
    echo "Artist : " . $cd->getArtist() . "<br>";
    echo "Genre : " . $cd->getGenre() . "<br>";

    // Harga setelah discount
    echo "New Price : " . $cd->discountPrice2() . "<br><br>";

    // Membuat objek CDRack
    $rack = new CDRack("The Wonder of You", 150000, 0.15, 0, 50, "Plastic");
    echo "CD RACK" . "<br>";
    echo "Name : " . $rack->getName() . "<br>";
    echo "Price : " . $rack->getPrice() . "<br>";
    echo "Discount : " . $rack->getDiscount2() * 100 . "%<br>";
    echo "Capacity : " . $rack->getCapacity() . "<br>";
    echo "Model : " . $rack->getModel() . "<br>";

    // Mengubah harga CDRack menjadi 15% lebih mahal
    echo "New Price : " . $rack->discountPrice() . "<br>";

?>