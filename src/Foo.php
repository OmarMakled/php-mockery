<?php 

class Foo{

	public function query()
	{
		return [1,2,3];
	}

	public function count()
	{
		return count($this->query());
	}
}