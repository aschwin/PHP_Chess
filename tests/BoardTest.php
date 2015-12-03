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

		$this->target->AddPiece(new Pawn(), new BoardCoordinate(1, 1));
	}
}

class Board {

	public function AddPiece(Pawn $piece, BoardCoordinate $moveTarget) {

	}
}

class Pawn {

}

class BoardCoordinate {

	/**
	 * @var integer $_x;
	 */
	private $_x;
	/**
	 * @var integer $_y;
	 */
	private $_y;

	public function __construct($xCoordinate, $yCoordinate) {

		$this->_x = $xCoordinate;
		$this->_y = $yCoordinate;
	}
}