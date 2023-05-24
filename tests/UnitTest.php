<?php


class UnitTest {
    public function testAdd() {
        $user = new User(18, 'John');

        $this->assertSame('John', $user->name);
        $this->assertSame(18,$user->age);
    }
}
?>
