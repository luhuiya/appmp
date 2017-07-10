--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.1
-- Dumped by pg_dump version 9.6.1

-- Started on 2017-07-10 16:24:29

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 236 (class 1259 OID 16814)
-- Name: review; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE review (
    id integer NOT NULL,
    user_id integer NOT NULL,
    product_id integer NOT NULL,
    description character varying(255) NOT NULL,
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    rating integer NOT NULL
);


ALTER TABLE review OWNER TO postgres;

--
-- TOC entry 235 (class 1259 OID 16812)
-- Name: review_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE review_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE review_id_seq OWNER TO postgres;

--
-- TOC entry 2275 (class 0 OID 0)
-- Dependencies: 235
-- Name: review_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE review_id_seq OWNED BY review.id;


--
-- TOC entry 2145 (class 2604 OID 16817)
-- Name: review id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY review ALTER COLUMN id SET DEFAULT nextval('review_id_seq'::regclass);


--
-- TOC entry 2270 (class 0 OID 16814)
-- Dependencies: 236
-- Data for Name: review; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY review (id, user_id, product_id, description, created_at, updated_at, rating) FROM stdin;
9	18	78	testing	2017-07-07 09:12:33	2017-07-07 09:12:33	3
8	18	78	testing3	2017-07-07 09:11:43	2017-07-10 02:00:25	2
\.


--
-- TOC entry 2276 (class 0 OID 0)
-- Dependencies: 235
-- Name: review_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('review_id_seq', 9, true);


--
-- TOC entry 2149 (class 2606 OID 16819)
-- Name: review review_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY review
    ADD CONSTRAINT review_pkey PRIMARY KEY (id);


--
-- TOC entry 2146 (class 1259 OID 16830)
-- Name: fki_review_product; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_review_product ON review USING btree (product_id);


--
-- TOC entry 2147 (class 1259 OID 16831)
-- Name: fki_user_id_user; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_user_id_user ON review USING btree (user_id);


--
-- TOC entry 2150 (class 2606 OID 16820)
-- Name: review fk_review_product; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY review
    ADD CONSTRAINT fk_review_product FOREIGN KEY (product_id) REFERENCES product(id);


--
-- TOC entry 2151 (class 2606 OID 16825)
-- Name: review fk_user_id_user; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY review
    ADD CONSTRAINT fk_user_id_user FOREIGN KEY (user_id) REFERENCES users(id);


-- Completed on 2017-07-10 16:24:31

--
-- PostgreSQL database dump complete
--

