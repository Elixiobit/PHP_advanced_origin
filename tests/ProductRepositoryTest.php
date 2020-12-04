<?php


class ProductTest extends \PHPUnit\Framework\TestCase
{
    /* public function testGetAll()
     {
          $rep = new \app\models\repositories\ProductRepository();
          $products = $rep->getAll();
          $this->assertIsArray($products);
          $this->assertNotEmpty($products);
          foreach ($products as $product) {
              $this->assertTrue(
                  is_a($product, \app\models\Product::class)
              );
          }
     }*/

    public function testProduct()
    {
        $product = new \app\models\Product();
        $product->price = 1000;

        $mock = $this->getMockBuilder(\app\models\Discount::class)
            ->setMethods(['getDiscount'])
            ->getMock();

        $mock->expects($this->any())
            ->method('getDiscount')
            ->will($this->returnValue(10));

        $this->assertEquals(990, $product->getPrice($mock));
    }

}