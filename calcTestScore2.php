<?php
class Test
{
	protected $score;
	protected $name;
	protected $math;
	protected $japanese;
	protected $english;

	public function score($name, $math, $japanese, $english)
	{
		$this->setstate($name, $math, $japanese, $english);
		$this->testscore();
		return $this->contents();
	}

	public function setstate($name, $math, $japanese, $english)
	{
		$this->name = $name;
		$this->math = $math;
		$this->japanese = $japanese;
		$this->english = $english;
	}

	public function testscore()
	{
		$sum = $this->math + $this->japanese + $this->english;
		$ave = $sum / 3;

		$score = array('sum' => $sum, 'ave' => $ave);

		$this->score = $score;
	}
		
	public function contents()
	{
		$sum = $this->score['sum'];
		$ave = $this->score['ave'];
		$name = $this->name;
		
		echo $name.'さんの合計点は'.$sum.'平均は'.$ave;
	}
}
