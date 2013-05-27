<?php

namespace Via\QueryBuilder;

class QueryBuilderImp implements QueryBuilder
{
	protected $selectFields;
	protected $tables;
	protected $sortOrder;

	private function buildSelect()
	{
		return "SELECT {$this->selectFields}";
	}

	private function buildFrom()
	{
		return " FROM {$this->tables}";
	}

	private function buildInsertInto()
	{
		return "INSERT INTO {$this->tables}";
	}

	private function buildOrderBy()
	{
		return " {$this->sortOrder}";
	}

	public function buildAllQuery()
	{
		$where = " WHERE deleted = 0";

		return $this->buildSelect().$this->buildFrom().$where.$this->buildOrderBy();  
	}

	public function buildAllFlaggedQuery($flag)
	{

		$where = " WHERE {$flag} = 1
				     AND deleted = 0";

		return $this->buildSelect().$this->buildFrom().$where.$this->buildOrderBy(); 		
	}

	public function buildSingleByIdQuery()
	{
		$where = " WHERE id = ?
				    AND deleted = 0";

		return $this->buildSelect().$this->buildFrom().$where.$this->buildOrderBy(); 				   
	}

	public function buildMultipleByIdsQuery()
	{
		$where = " WHERE id IN (?)
				    AND deleted = 0";

		return $this->buildSelect().$this->buildFrom().$where.$this->buildOrderBy(); 				   
	}

	public function buildUpdateSingleByIdQuery()
	{
		return $this->buildInsertInto();
	}
}