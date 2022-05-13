<?php

class Emp
{
    private ?string $empName = null;
    private ?int $empAge = null;

    /**
     * @return string|null
     */
    public function getEmpName(): ?string
    {
        return $this->empName;
    }

    /**
     * @param string|null $empName
     */
    public function setEmpName(?string $empName): void
    {
        $this->empName = $empName;
    }

    /**
     * @return int|null
     */
    public function getEmpAge(): ?int
    {
        return $this->empAge;
    }

    /**
     * @param int|null $empAge
     */
    public function setEmpAge(?int $empAge): void
    {
        $this->empAge = $empAge;
    }
}

$emp = new Emp();

// Before:
//$emp->empName = "Alice";
// After:
$emp->setEmpName("Alice");

// Before:
//$emp->empAge = 22;
// After:
$emp->setEmpAge(22);

// Before:
// echo $emp->empName;
echo $emp->getEmpName();
// After:
// echo $emp->empAge;
echo $emp->getEmpAge();