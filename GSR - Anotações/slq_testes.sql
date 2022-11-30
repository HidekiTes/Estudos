-- Teste 1 - Verificação do Select (FUNCIONOU)
select 
	codigo, 
	sigla, 
	descricao, 
	telefone, 
	vigencia, 
	termino_vigencia 

from 
	aac_organograma ao 

--------------------------------
-- Teste 2 - Adicionando Alias (FUNCIONOU)
select 
	codigo as cod, 
	sigla as sg, 
	descricao as desc, 
	telefone as tel, 
	vigencia as vig, 
	termino_vigencia as ter_vig 

from 
	aac_organograma ao 

-----------------------------------
-- Adicionando order by (FUNCIONOU)

select 
	codigo as cod, 
	sigla as sg, 
	descricao as desc, 
	telefone as tel, 
	vigencia as vig, 
	termino_vigencia as ter_vig 

from 
	aac_organograma ao 

order by
  ao.descricao

--------------------------------
-- Adicionando where + order by (FUNCIONOU)

select 
	codigo as cod, 
	sigla as sg, 
	descricao as desc, 
	telefone as tel, 
	vigencia as vig, 
	termino_vigencia as ter_vig 

from 
	aac_organograma ao 

where
  ao.codigo between '1' and '1000'

order by
  ao.descricao


  --------------------------------------------
  --------------------------------------------
  --------------------------------------------

-- Select * from aac_municipios
-- Select * from aac_municipios where uf = 'RO' of uf = 'AC
-- 
-- Estado/ Municipio/ Codigo/ Codigo TJ

----------------------------------------------
Select 
	uf                   as estado,
	nome_municipio       as municipio,
	codigo_municipio     as codigo,
	codigo_tjrj          as codigo_tj
	
from
	aac_municipios am

order by
  uf

-----------------------------------------------  
Select 
	uf                   as estado,
	nome_municipio       as municipio,
	codigo_municipio     as codigo,
	codigo_tjrj          as codigo_tj
	
from
	aac_municipios am
	
where
  am.uf = 'GO'

order by
  municipio

-----------------------------------------------
Select 
    --am.uf                   as estado,
    ae.uf                    as uf,
    ae.nome_estado          as nome_estado,
    am.nome_municipio       as municipio,
    am.codigo_municipio     as codigo,
    am.codigo_tjrj          as codigo_tj


from
    aac_municipios am

left join
    aac_estados ae on am.uf = ae.uf 

--where
  --    am.uf = 'GO' 

order by
    municipio