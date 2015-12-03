<?php

class BoardTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var Pawn $piece
	 */
	private $piece;
	/**
	 * @var Board $target
	 */
	private $target;

	public function setUp() {

		$this->piece = new Pawn();
		$this->target = new Board();
	}

	public function testAddPiece() {

		$this->target->AddPiece(new Pawn(), 2, 1);
	}
}

class Board {

	public function AddPiece(Pawn $piece, $xCoordinate = 0, $yCoordinate = 0) {

	}
}

class Pawn {

}

