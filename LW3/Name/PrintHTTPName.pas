PROGRAM PrintHTTPName;

USES
  DOS;

VAR
  QueryString, Name: STRING;
  PosName, PosNext, LenName, LenNext: INTEGER;
BEGIN {PrintHTTPName}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QueryString := GetEnv('QUERY_STRING');
  PosName := Pos('name=', QueryString);
  QueryString := Copy(QueryString, PosName, Length(QueryString)) + '&';
  PosNext := Pos('&', QueryString);
  LenNext := Length(Copy(QueryString,  5, LenName));
  Name := Copy(QueryString, 6, PosNext - 6);
  IF (Name = '') OR (PosName = 0)
  THEN
    WRITE('Hello Anonymous!')
  ELSE  
    WRITE('Hello dear, ', Name)
END.
