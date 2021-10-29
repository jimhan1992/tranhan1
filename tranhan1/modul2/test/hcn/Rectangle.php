<?php
//Xây dựng lớp Hình chữ nhật với các thuộc tính:
//width (chiều rộng),
//height (chiều cao),
//phương thức khởi tạo không tham số và có 2 tham số, các phương thức:
//getArea() (tính diện tích),
//getPerimeter() (tính chu vi) và d
//isplay() (hiển thị).

class Rectangle
{
    public int $width;
    public int $height;

    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function getArea(): int
    {
        return $this->width * $this->height;
    }

    function getPerimeter():int
    {
        return 2 * ($this->width + $this->height);
    }
    public function display(): string
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}

