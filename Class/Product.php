<?php



namespace Data {
    class Product
    {
        private string $nama;
        private int $price;

        public function __construct(string $nama, int $price)
        {
            $this->nama = $nama;
            $this->price = $price;
        }

        public function setNama(string $nama): string
        {
            return $this->nama = $nama;
        }

        public function setPrice(int $price): int
        {
            return $this->price = $price;
        }

        public function getNama(): string
        {
            return $this->nama;
        }
        public function getPrice(): int
        {
            return $this->price;
        }
    }
}
