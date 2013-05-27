<?php

namespace Via\QueryBuilder;

interface QueryBuilder
{
	public function buildAllQuery();
	public function buildAllFlaggedQuery($flag);
	public function buildSingleByIdQuery();
	public function buildMultipleByIdsQuery();
}