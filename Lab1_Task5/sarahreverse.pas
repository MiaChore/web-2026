PROGRAM CountLanterns(INPUT, OUTPUT);
USES
  DOS;
VAR
  Income: STRING;
BEGIN
  WRITELN('Content-type: text/plain');
  WRITELN;
  Income := GetEnv('QUERY_STRING');
  IF Income = 'lanterns=1'
  THEN
    WRITELN('THE BRITISH ARE COMING BY SEA')
  ELSE
    IF Income = 'lanterns=2'
    THEN
      WRITELN('THE BRITISH ARE COMING BY AIR')
    ELSE
      WRITELN('THERE ARE NO BRITISH')
END.
