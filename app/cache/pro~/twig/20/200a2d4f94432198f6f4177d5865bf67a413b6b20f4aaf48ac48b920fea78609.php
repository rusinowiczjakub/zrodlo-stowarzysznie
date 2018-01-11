<?php

/* front/index.html.twig */
class __TwigTemplate_7f2720138750b702ea4c8ff7aae335b861005ffd81c4befad0ffd054220be960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_648726ef4dae8b94b1ddeec83269ba56725fe27e2f11f54ddef991ef92535c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648726ef4dae8b94b1ddeec83269ba56725fe27e2f11f54ddef991ef92535c81->enter($__internal_648726ef4dae8b94b1ddeec83269ba56725fe27e2f11f54ddef991ef92535c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_648726ef4dae8b94b1ddeec83269ba56725fe27e2f11f54ddef991ef92535c81->leave($__internal_648726ef4dae8b94b1ddeec83269ba56725fe27e2f11f54ddef991ef92535c81_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b656fa09685db1e16204ffca78ee72ca514ca2b73142d2e7b8aee5915f4f378a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b656fa09685db1e16204ffca78ee72ca514ca2b73142d2e7b8aee5915f4f378a->enter($__internal_b656fa09685db1e16204ffca78ee72ca514ca2b73142d2e7b8aee5915f4f378a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/index.css"), "html", null, true);
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=Alegreya+Sans\" rel=\"stylesheet\">
";
        
        $__internal_b656fa09685db1e16204ffca78ee72ca514ca2b73142d2e7b8aee5915f4f378a->leave($__internal_b656fa09685db1e16204ffca78ee72ca514ca2b73142d2e7b8aee5915f4f378a_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_4251d00e1f458391af1ac50be50c9798e9c5ecaf4e297bc0c5ad2c69b2c0677d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4251d00e1f458391af1ac50be50c9798e9c5ecaf4e297bc0c5ad2c69b2c0677d->enter($__internal_4251d00e1f458391af1ac50be50c9798e9c5ecaf4e297bc0c5ad2c69b2c0677d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <div class=\"header__content\">
        <h1>\"Źródło\"</h1>
        <h2>Stowarzyszenie Na Rzecz Wychowanków Zespołu Szkół Specjalnych</h2>
        <h2>Pomagamy!</h2>
        <h2>Pomóż i Ty.</h2>
    </div>
";
        
        $__internal_4251d00e1f458391af1ac50be50c9798e9c5ecaf4e297bc0c5ad2c69b2c0677d->leave($__internal_4251d00e1f458391af1ac50be50c9798e9c5ecaf4e297bc0c5ad2c69b2c0677d_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdbb5a62606ac77d8c266f9434756d5254f4b66d816cf3daa0f05151a4d07512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdbb5a62606ac77d8c266f9434756d5254f4b66d816cf3daa0f05151a4d07512->enter($__internal_fdbb5a62606ac77d8c266f9434756d5254f4b66d816cf3daa0f05151a4d07512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "<main>
    <section>
        <h1> Przekaż swój 1% na Stowarzyszenie Na Rzecz Wychowanków Zespołu Szkół Specjalnych \"Źródło\"</h1>
        <h2>Wystarczy tylko w podatkowej deklaracji rocznej podać nasz numer KRS. Ty nic nie tracisz ,a osoby z niepełnsprawnością zyskują pomoc i wsparcie!</h2>
        <h2>Jesteśmy organizacją pożytku publicznego dzialającą na rzecz uczniów, absolwentów Zespołu Szkół Specjalnych.</h2>
    </section>
    <section id=\"first\">
        <article class=\"info\">
            <div class=\"info__left\">
                <div class=\"info__left-image\"></div>
            </div>
            <div class=\"info__right\">
                <h1>Jak działamy?</h1>
                <ul>
                    <li>organizujemy pomoc w bieżących problemach w funkcjonowaniu, pomoc interwencyjną w waznych sprawach związanych z różnego rodzaju instytucjami</li>
                    <li>organizujemy imprezy dla uczniów, absolwentów oraz ich rodzin</li>
                    <li>organizujemy ciekawe zajęcia specjalistyczne wzmacniające rozwój uczniów niepełnosprawnych – hipoterapia, dogoterapia</li>
                    <li>pozyskujemy dotacje oraz fundusze na wiele zajęć pozalekcyjnych, które zapewniają wszechstronny rozwój wychowanków jak również pozwalają im na ciekawe spędzanie czasu wolnego.</li>
                    <li>organizujemy specjalistyczne szkolenia dla kadry oraz rodziców</li>
                </ul>
            </div>
        </article>
        <article class=\"KRS\">
            <div class=\"KRS__left\">
                <h1>Stowarzyszenie Źródło</h1>
                <p>Ul. Iłżecka 31, Ostrowiec Św, tel. +48 784 510 686</p>
                <h1>KRS 0000309966</h1>
                <div>
                    <img src=";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo-1-procent.png"), "html", null, true);
        echo "/>
                </div>
                <h1>Dziękujemy za wsparcie!</h1>
            </div>
            <div class=\"KRS__right\">
                <div class=\"KRS__right-image\"></div>
            </div>
        </article>
    </section>
    <footer>
        <i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-internet-explorer\" aria-hidden=\"true\"></i>
        <i></i>
    </footer>
</main>

";
        
        $__internal_fdbb5a62606ac77d8c266f9434756d5254f4b66d816cf3daa0f05151a4d07512->leave($__internal_fdbb5a62606ac77d8c266f9434756d5254f4b66d816cf3daa0f05151a4d07512_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 46,  78 => 18,  72 => 17,  59 => 9,  53 => 8,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/index.css') }}\" />
    <link href=\"https://fonts.googleapis.com/css?family=Alegreya+Sans\" rel=\"stylesheet\">
{% endblock %}

{% block header %}
    <div class=\"header__content\">
        <h1>\"Źródło\"</h1>
        <h2>Stowarzyszenie Na Rzecz Wychowanków Zespołu Szkół Specjalnych</h2>
        <h2>Pomagamy!</h2>
        <h2>Pomóż i Ty.</h2>
    </div>
{% endblock %}

{% block body %}
<main>
    <section>
        <h1> Przekaż swój 1% na Stowarzyszenie Na Rzecz Wychowanków Zespołu Szkół Specjalnych \"Źródło\"</h1>
        <h2>Wystarczy tylko w podatkowej deklaracji rocznej podać nasz numer KRS. Ty nic nie tracisz ,a osoby z niepełnsprawnością zyskują pomoc i wsparcie!</h2>
        <h2>Jesteśmy organizacją pożytku publicznego dzialającą na rzecz uczniów, absolwentów Zespołu Szkół Specjalnych.</h2>
    </section>
    <section id=\"first\">
        <article class=\"info\">
            <div class=\"info__left\">
                <div class=\"info__left-image\"></div>
            </div>
            <div class=\"info__right\">
                <h1>Jak działamy?</h1>
                <ul>
                    <li>organizujemy pomoc w bieżących problemach w funkcjonowaniu, pomoc interwencyjną w waznych sprawach związanych z różnego rodzaju instytucjami</li>
                    <li>organizujemy imprezy dla uczniów, absolwentów oraz ich rodzin</li>
                    <li>organizujemy ciekawe zajęcia specjalistyczne wzmacniające rozwój uczniów niepełnosprawnych – hipoterapia, dogoterapia</li>
                    <li>pozyskujemy dotacje oraz fundusze na wiele zajęć pozalekcyjnych, które zapewniają wszechstronny rozwój wychowanków jak również pozwalają im na ciekawe spędzanie czasu wolnego.</li>
                    <li>organizujemy specjalistyczne szkolenia dla kadry oraz rodziców</li>
                </ul>
            </div>
        </article>
        <article class=\"KRS\">
            <div class=\"KRS__left\">
                <h1>Stowarzyszenie Źródło</h1>
                <p>Ul. Iłżecka 31, Ostrowiec Św, tel. +48 784 510 686</p>
                <h1>KRS 0000309966</h1>
                <div>
                    <img src={{ asset(\"assets/images/logo-1-procent.png\") }}/>
                </div>
                <h1>Dziękujemy za wsparcie!</h1>
            </div>
            <div class=\"KRS__right\">
                <div class=\"KRS__right-image\"></div>
            </div>
        </article>
    </section>
    <footer>
        <i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-internet-explorer\" aria-hidden=\"true\"></i>
        <i></i>
    </footer>
</main>

{% endblock %}", "front/index.html.twig", "/home/kuba/Workspace/wordpress/app/Resources/views/front/index.html.twig");
    }
}
