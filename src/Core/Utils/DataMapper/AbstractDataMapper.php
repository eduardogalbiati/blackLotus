<?Php

namespace Core\Utils\DataMapper;

abstract class AbstractDataMapper
{
	protected $db;
	protected $count;

	protected function updateTableById($table, Array $array, Array $condicao){

		$this->db->update($table, $array, $condicao);
		//$this->db->getSQL();
	}
	protected function insertTableArray($table, Array $array){

		$this->db->insert($table, $array);
		//$this->db->getSQL();
	}

	protected function setCount($queryBuilder)
	{
		$queryBuilder->select('COUNT(1)');
		$stmt = $queryBuilder->execute();
		$this->count = $stmt->fetchColumn();
	}

	public function getCount()
	{
		return $this->count;
	}

}