--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: authors; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE authors (
    id integer NOT NULL,
    name character varying(100),
    last_name character varying(100),
    description character varying(255)
);


ALTER TABLE public.authors OWNER TO postgres;

--
-- Name: TABLE authors; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE authors IS 'Represents the authors of the books';


--
-- Name: authors_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE authors_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.authors_id_seq OWNER TO postgres;

--
-- Name: authors_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE authors_id_seq OWNED BY authors.id;


--
-- Name: books; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE books (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    publishing_year integer NOT NULL,
    edition integer,
    is_digital boolean NOT NULL,
    genre_id integer NOT NULL,
    collection_id integer,
    editorial_id integer NOT NULL,
    author_id integer NOT NULL
);


ALTER TABLE public.books OWNER TO postgres;

--
-- Name: TABLE books; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE books IS 'Represents the books';


--
-- Name: books_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE books_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.books_id_seq OWNER TO postgres;

--
-- Name: books_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE books_id_seq OWNED BY books.id;


--
-- Name: collections; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE collections (
    id integer NOT NULL,
    name character varying(1000),
    description character varying(255)
);


ALTER TABLE public.collections OWNER TO postgres;

--
-- Name: TABLE collections; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE collections IS 'Represents those books that belong to the same story';


--
-- Name: collections_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE collections_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.collections_id_seq OWNER TO postgres;

--
-- Name: collections_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE collections_id_seq OWNED BY collections.id;


--
-- Name: editorials; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE editorials (
    id integer NOT NULL,
    name character varying(20),
    description character varying(255)
);


ALTER TABLE public.editorials OWNER TO postgres;

--
-- Name: TABLE editorials; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE editorials IS 'Represents the publishing houses';


--
-- Name: editorials_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE editorials_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.editorials_id_seq OWNER TO postgres;

--
-- Name: editorials_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE editorials_id_seq OWNED BY editorials.id;


--
-- Name: genres; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE genres (
    id integer NOT NULL,
    name character varying(20),
    description character varying(255)
);


ALTER TABLE public.genres OWNER TO postgres;

--
-- Name: TABLE genres; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE genres IS 'Represents the types of genres available';


--
-- Name: genres_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE genres_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.genres_id_seq OWNER TO postgres;

--
-- Name: genres_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE genres_id_seq OWNED BY genres.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY authors ALTER COLUMN id SET DEFAULT nextval('authors_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY books ALTER COLUMN id SET DEFAULT nextval('books_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY collections ALTER COLUMN id SET DEFAULT nextval('collections_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY editorials ALTER COLUMN id SET DEFAULT nextval('editorials_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY genres ALTER COLUMN id SET DEFAULT nextval('genres_id_seq'::regclass);


--
-- Data for Name: authors; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: authors_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('authors_id_seq', 1, false);


--
-- Data for Name: books; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: books_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('books_id_seq', 1, false);


--
-- Data for Name: collections; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: collections_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('collections_id_seq', 1, false);


--
-- Data for Name: editorials; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: editorials_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('editorials_id_seq', 1, false);


--
-- Data for Name: genres; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: genres_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('genres_id_seq', 1, false);


--
-- Name: authors_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY authors
    ADD CONSTRAINT authors_pkey PRIMARY KEY (id);


--
-- Name: books_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY books
    ADD CONSTRAINT books_pkey PRIMARY KEY (id);


--
-- Name: collections_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY collections
    ADD CONSTRAINT collections_pkey PRIMARY KEY (id);


--
-- Name: editorials_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY editorials
    ADD CONSTRAINT editorials_pkey PRIMARY KEY (id);


--
-- Name: genres_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY genres
    ADD CONSTRAINT genres_pkey PRIMARY KEY (id);


--
-- Name: author_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY books
    ADD CONSTRAINT author_id_fkey FOREIGN KEY (author_id) REFERENCES authors(id);


--
-- Name: collection_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY books
    ADD CONSTRAINT collection_id_fkey FOREIGN KEY (collection_id) REFERENCES collections(id);


--
-- Name: editorial_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY books
    ADD CONSTRAINT editorial_id_fkey FOREIGN KEY (editorial_id) REFERENCES editorials(id);


--
-- Name: genre_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY books
    ADD CONSTRAINT genre_id_fkey FOREIGN KEY (genre_id) REFERENCES genres(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

