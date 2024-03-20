<?php

...

class ClassExample
{
	//Получить свойства торгового предложения по id торгового предложения
	public static function getOfferPropsByOfferID($offer_id){

		$props = false;

		$res = CIBlockElement::GetList(
			[],
			[
				"ID" => $offer_id,
				"IBLOCK_ID" => OFFER_CATALOG_IBLOCK_ID,
			],
			false,
			[
				"nPageSize"=>1
			],
			[
				"ID",
				"NAME",
				"IBLOCK_ID",
				"PROPERTY_*"
			]
		);

		while($ob = $res->GetNextElement())
		{
			$props = $ob->GetProperties();
		}		

		return $props;
	}	

	//Получить свойства товара по id товара
	public static function getProductPropsByProductID($product_id){

		$props = false;

		$res = CIBlockElement::GetList(
			[],
			[
				"ID" => $product_id,
				"IBLOCK_ID" => CATALOG_IBLOCK_ID,
			],
			false,
			[
				"nPageSize"=>1
			],
			[
				"ID",
				"NAME",
				"IBLOCK_ID",
				"PROPERTY_*"
			]
		);

		while($ob = $res->GetNextElement())
		{
			$props = $ob->GetProperties();
		}		

		return $props;
	}	

	//Получить свойства товара по id товара
	public static function getProductCodeByProductID($product_id){

		$fields['CODE'] = false;

		$res = CIBlockElement::GetList(
			[],
			[
				"ID" => $product_id,
				"IBLOCK_ID" => CATALOG_IBLOCK_ID,
			],
			false,
			[
				"nPageSize"=>1
			],
			[
				"ID",
				"NAME",
				"IBLOCK_ID",
				"CODE"
			]
		);

		while($ob = $res->GetNextElement())
		{
			$fields = $ob->GetFields();
		}		

		return $fields['CODE'];
	}		
	
}

...