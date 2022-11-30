Para usar o sub select, você terá que aplicar entre () um Select junto de um Alias no qual o Alias tera de ser substituído a cada vez que for executado

	(SELECT ci.I015 FROM CTEC_IMOVEIS ci WHERE ci.REFERENCIAL = :REFERENCIAL) AS A_Terreno,
	(SELECT cm.I016 FROM CTEC_IMOVEIS cm WHERE cm.REFERENCIAL = :REFERENCIAL) AS A_Construida,
	(SELECT co.I017 FROM CTEC_IMOVEIS co WHERE co.REFERENCIAL = :REFERENCIAL) AS Testada

