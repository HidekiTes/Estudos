### SQL de Testes para Aprendizado - (AAC - Municipios)

#### Query 1

Select
  uf as estado,
  nome_municipio as municipio,
  codigo_municipio as codigo,
  codigo_tjrj as codigo_tj

From
  aac_municipios am

Order by
  uf
  
____
#### Query 2

Select
  uf as estado,
  nome_municipio as municipio,
  codigo_municipio as codigo,
  codigo_tjrj as codigo_tj

From
  aac_municipios am

Where
  am.uf = 'GO'

Order by
  municipio

____
#### Query 3

Select
    --am.uf                   as estado,
    ae.uf                    as uf,
    ae.nome_estado          as nome_estado,
    am.nome_municipio       as municipio,
    am.codigo_municipio     as codigo,
    am.codigo_tjrj          as codigo_tj

From
   aac_municipios am

Left join
    aac_estados ae on am.uf = ae.uf

--where
  --am.uf = 'GO'

Order by
    municipio