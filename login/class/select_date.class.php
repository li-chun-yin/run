<?php
class select_date
	{
		private $day;
		private $select_year_tag;
		private $select_month_tag;
		private $select_day_tag1;
		private $select_day_tag2;
		private $setvalue;
		function __construct($date="")
			{
				if(empty($date))
					$this->day = date('Y-m-d');
				else
					$this->day = $date;	
			}
		function select_year($tag="",$sec_year="",$script_str="")
			{
				if(empty($tag))
					$this->select_year_tag = 'selectyear';
				else
					$this->select_year_tag = $tag;
				$year = substr($this->day,0,4);
				$select_year="<select id='$this->select_year_tag' name='$this->select_year_tag' $script_str style='float:left;'>";
				if($sec_year == '')
					$select_year.="<option value='0' selected>请选择</option>";
				for($i=$year; $i>$year-150; $i--)
					{
						if($sec_year==$i)
							$select_year .="<option value='$i' selected>$i"."年</option>";
						else
							$select_year .= "<option value='$i'>$i"."年</option>";
					}		
				$select_year.="</select>";
				return $select_year;
			}
		function select_month($tag="",$sec_month="",$script_str="")
			{
				if(empty($tag))
					$this->select_month_tag = 'selectmonth';
				else
					$this->select_month_tag = $tag;
				$month =substr($this->day,5,2);
				$select_month = "<select id='$this->select_month_tag' name='$this->select_month_tag' $script_str style='float:left; margin-left:2px;'>";
				if($sec_month == '')
					$select_month.="<option value='0' selected>请选择</option>";
				for($i=1; $i<=12; $i++){
					if($sec_month==$i)
						$select_month .="<option value='$i' selected>$i"."月</option>";
					else
						$select_month .="<option value='$i'>$i"."月</option>";
				}
				$select_month .= "</select>";
				return $select_month;
			}
		function select_day($tag="",$sec_day="",$div="")
			{
				if(empty($tag))
					$this->select_day_tag = 'selectday';
				else
					$this->select_day_tag = $tag;
				$total = 31;
				if(empty($div))
					$div = 'resetday';
				$select_day = "<div id=$div><select id='$this->select_day_tag' name='$this->select_day_tag'>";
				if($sec_day == '')
					$select_day.="<option value='0' selected>请选择</option>";
				for($i=1; $i<=31; $i++)
					{
						if($sec_day==$i)
							$select_day .="<option value='$i' selected>$i"."日</option>";
						else
							$select_day .="<option value='$i'>$i"."日</option>";
					}
				$select_day .= "</select></div>";				
				return $select_day;
			}
		function select_date($tag1="",$tag2="",$tag3="",$tag4="",$script1="",$script2="")
			{
				$selectyear = $this->select_year($tag1,'',$script1);
				$selectmonth = $this->select_month($tag2,'',$script2);
				$selectday = $this->select_day($tag3,'',$tag4);
				$selectdate = $selectyear . $selectmonth . $selectday;
				return $selectdate;
			}
	}
?>