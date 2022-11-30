### SQL de Testes para Aprendizado - (AAC - Organograma)

#### Teste 1 - Verificação do Select 

select
  codigo,
  sigla,
  descricao,
  telefone,
  vigencia,
  termino_vigencia

from
  aac_organograma ao
  
____
#### Teste 2 - Adicionando Alias

select
  codigo as cod,
  sigla as sg,
  descricao as desc,
  telefone as tel,
  vigencia as vig,
  termino_vigencia as ter_vig

from
  aac_organograma ao
  
______
#### Teste 3 - Adicionando order by 

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
#### Teste 4 - Adicionando where + order by 

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