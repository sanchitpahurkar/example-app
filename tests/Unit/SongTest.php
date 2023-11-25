<?php
class SongTest extends \PHPUnit\Framework\TestCase {

    public function testSetTempo() {
        $song = new Song();
        $song->setTempo(60);
        $this->assertEquals(60, $song->getTempo());
    }

    public function testSetTempoAcceptsIntegerString() {
        $song = new Song();
        $song->setTempo("60");
        $this->assertEquals(60, $song->getTempo());
    }

    public function testSetTempoRejectsAlphabetString() {
        $song = new Song();
        $this->expectException(InvalidArgumentException::class);
        $song->setTempo("60 BPM");
    }

    public function testSetTempoRejectsFloat() {
        $song = new Song();
        $this->expectException(InvalidArgumentException::class);
        $song->setTempo(60.5);
    }

}
?>