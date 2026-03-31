PROGRAM GreatingVisitor(INPUT, OUTPUT);
USES
  DOS;
VAR
  QueryString, Name: STRING;
  Pos_Name, Pos_End: INTEGER;
BEGIN
  WRITELN('Content-type: text/plain');
  WRITELN;
  QueryString := GetEnv('QUERY_STRING');
  Pos_Name := Pos('name=', QueryString);
  IF Pos_Name > 0
  THEN
    BEGIN
      NAME := Copy(QueryString, Pos_Name + 5, Length(QueryString));
      Pos_End := Pos('&', Name);
      IF Pos_End > 0
      THEN
        Name := Copy(Name, 1, Pos_End - 1);
      IF Name = ''
      THEN
        Name := 'Anonymous'
    END
  ELSE
    Name := 'Anonymous';
  WRITELN('Hello, dear, ', Name)
END.
