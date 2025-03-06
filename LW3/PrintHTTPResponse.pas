PROGRAM PrintHTTPResponse(INPUT, OUTPUT);
{������ ��������� � ��� ��� ���� ��������, � ����������� 
�� ����, ������ �� ����� ����������� 'land' ��� 'sea'.}

USES
  DOS;

VAR
  Qst: STRING;
  W1, W2, W3, W4, Looking: CHAR;
  F: TEXT;
BEGIN {SarahRevere}
  {������������� W1,W2,W3,W4,Looking}
  Qst := GetEnv('QUERY_STRING') + '#';
  REWRITE(F);
  WRITE(F, Qst);  
  W1 := ' ';
  W2 := ' ';
  W3 := ' ';
  W4 := ' ';
  Looking := 'Y';
  RESET(F);
  WHILE Looking = 'Y'
  DO
    BEGIN
      {������� ����, ��������� ����� ������}
      W1 := W2;
      W2 := W3;
      W3 := W4;
      READ(F, W4);
      IF W4 = '#'
      THEN {����� ������}
        Looking := 'N';
      {�������� ���� ���  'land'}
      IF W1 = 'l'
        THEN
          IF W2 = 'a'
          THEN
            IF W3 = 'n'
            THEN
              IF W4 = 'd'
              THEN {'land' �������}
                Looking := 'L';
      {�������� ���� ��� 'sea'}
      IF W2 = 's'
        THEN
          IF W3 = 'e'
          THEN
             IF W4 = 'a'
             THEN {'sea' �������}
                Looking := 'S'
    END;
  {������� ��������� Sarah}
  WRITELN('Content-Type: text/plain');
  WRITELN;
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
