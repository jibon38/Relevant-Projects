
/* A Bison parser, made by GNU Bison 2.4.1.  */

/* Skeleton interface for Bison's Yacc-like parsers in C
   
      Copyright (C) 1984, 1989, 1990, 2000, 2001, 2002, 2003, 2004, 2005, 2006
   Free Software Foundation, Inc.
   
   This program is free software: you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.
   
   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.
   
   You should have received a copy of the GNU General Public License
   along with this program.  If not, see <http://www.gnu.org/licenses/>.  */

/* As a special exception, you may create a larger work that contains
   part or all of the Bison parser skeleton and distribute that work
   under terms of your choice, so long as that work isn't itself a
   parser generator using the skeleton or a modified version thereof
   as a parser skeleton.  Alternatively, if you modify or redistribute
   the parser skeleton itself, you may (at your option) remove this
   special exception, which will cause the skeleton and the resulting
   Bison output files to be licensed under the GNU General Public
   License without this special exception.
   
   This special exception was added by the Free Software Foundation in
   version 2.2 of Bison.  */


/* Tokens.  */
#ifndef YYTOKENTYPE
# define YYTOKENTYPE
   /* Put the tokens into the symbol table, so that GDB and other debuggers
      know about them.  */
   enum yytokentype {
     ID = 258,
     NUM = 259,
     T_lt = 260,
     T_gt = 261,
     T_lteq = 262,
     T_gteq = 263,
     T_neq = 264,
     T_eqeq = 265,
     T_pl = 266,
     T_min = 267,
     T_mul = 268,
     T_div = 269,
     T_and = 270,
     T_or = 271,
     T_incr = 272,
     T_decr = 273,
     T_not = 274,
     T_eq = 275,
     WHILE = 276,
     INT = 277,
     CHAR = 278,
     FLOAT = 279,
     DOUBLE = 280,
     VOID = 281,
     H = 282,
     MAINTOK = 283,
     INCLUDE = 284,
     BREAK = 285,
     CONTINUE = 286,
     IF = 287,
     ELSE = 288,
     COUT = 289,
     STRING = 290,
     FOR = 291,
     ENDL = 292,
     DOT = 293,
     DO = 294,
     RETURN = 295,
     BOUND = 296,
     IN = 297,
     T_dot = 298
   };
#endif



#if ! defined YYSTYPE && ! defined YYSTYPE_IS_DECLARED
typedef int YYSTYPE;
# define YYSTYPE_IS_TRIVIAL 1
# define yystype YYSTYPE /* obsolescent; will be withdrawn */
# define YYSTYPE_IS_DECLARED 1
#endif

extern YYSTYPE yylval;


