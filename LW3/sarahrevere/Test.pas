PROGRAM Test(INPUT, OUTPUT);

{Печать сообщения о том как идут британцы, в зависимости 
от того, первым во входе встречается 'land' или 'sea'.}
VAR
  Qsr: STRING;
  W1, W2, W3, W4, Looking: CHAR;
  F: TEXT;
BEGIN {SarahRevere}
  {Инициализация W1,W2,W3,W4,Looking}
  READLN(Qsr);
  Qsr := Qsr + '#';
  REWRITE(F);
  WRITE(F, Qsr);  
  
  W1 := ' ';
  W2 := ' ';
  W3 := ' ';
  W4 := ' ';
  Looking := 'Y';
  RESET(F);
  WHILE Looking = 'Y'
  DO
    BEGIN
      {Двигать окно, проверять конец данных}
      W1 := W2;
      W2 := W3;
      W3 := W4;
      READ(F, W4);
      IF W4 = '#'
      THEN {Конец данных}
        Looking := 'N';
      {Проверка окна для  'land'}
      IF W1 = 'l'
        THEN
          IF W2 = 'a'
          THEN
            IF W3 = 'n'
            THEN
              IF W4 = 'd'
              THEN {'land' найдено}
                Looking := 'L';
      {Проверка окна для 'sea'}
      IF W2 = 's'
        THEN
          IF W3 = 'e'
          THEN
             IF W4 = 'a'
             THEN {'sea' найдено}
                Looking := 'S'
    END;
  {создать сообщение Sarah}
  IF Looking = 'L'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF Looking = 'S'
    THEN
      WRITELN('The British coming by sea.')
    ELSE
      WRITELN('Sarah didn''t say')
END. {Sarah revere}
