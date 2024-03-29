<?php
class Users
{
    static private $countUsers = 0;
	
    private $name;
    private $dateofBirthday;
    private $position;
    private $salary;
	
    public function __construct($name, $dateofBirthday, $position, $salary)
    {
        $this->name = $name;
        $this->dateofBirthday = $dateofBirthday;
        $this->position = $position;
        $this->salary = $salary;
        self::$countUsers++; //self это обращения к статическим переменным
		
    }
    // клонируем и обнуляем 2 параметра
    public function __clone()
    {
        $this->position = null;
        $this->salary = null;
        self::$countUsers++; //self это обращения к статическим переменным
    }
	
    // задаем новый position
    public function setPosition($position)
    {
        $this->position = $position;
    }
	
    public function getPosition($position)
    {
        return $this->position;
    }
	
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
	
    public function getSalary($salary)
    {
        return $this->salary;
    }
	
    public static function getCountUser()
    {
        return self::$countUsers;
    }
	
    public static function __callStatic($name, $arguments)
    {
        if ($name == 'setCountUser') {
            self::$countUsers = $arguments[0];
        }
    }
	
	public function __sleep()
	{
		// для сериализации указываю 2 свойства:
		$this->name = 'NewNmae'; // задаю имя
		$this->dateofBirthday = '2010-10-10'; // задаю дату
		return array('name', 'dateofBirthday', 'position', 'salary');
	}
	
	public function __wakeup()
	{
		// при востановлении обьекта задать ему позицию: 'empty'
		return $this->position = 'empty';
	}
	
	
}

	
	
	
	


