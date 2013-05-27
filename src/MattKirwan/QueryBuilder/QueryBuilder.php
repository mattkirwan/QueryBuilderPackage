<?php

namespace MattKirwan\QueryBuilder;

interface QueryBuilder
{
	public function buildAllQuery();
	public function buildAllFlaggedQuery($flag);
	public function buildSingleByIdQuery();
	public function buildMultipleByIdsQuery();
}