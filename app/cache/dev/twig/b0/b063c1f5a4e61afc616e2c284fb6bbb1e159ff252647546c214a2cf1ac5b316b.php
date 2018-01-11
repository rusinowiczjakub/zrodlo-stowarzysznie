<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_173b615a89e718a1990867573507b108c932c6c9467bb23f801470a9865598c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator:final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f0a4a0528b1a698244c091155e904b47b64de430b5ba22911f7085dbf48d58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0a4a0528b1a698244c091155e904b47b64de430b5ba22911f7085dbf48d58f->enter($__internal_8f0a4a0528b1a698244c091155e904b47b64de430b5ba22911f7085dbf48d58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f0a4a0528b1a698244c091155e904b47b64de430b5ba22911f7085dbf48d58f->leave($__internal_8f0a4a0528b1a698244c091155e904b47b64de430b5ba22911f7085dbf48d58f_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_6e23986c571da33750629b3433767e14e837f3539ebbc20c5a705b25e7e1232a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e23986c571da33750629b3433767e14e837f3539ebbc20c5a705b25e7e1232a->enter($__internal_6e23986c571da33750629b3433767e14e837f3539ebbc20c5a705b25e7e1232a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_6e23986c571da33750629b3433767e14e837f3539ebbc20c5a705b25e7e1232a->leave($__internal_6e23986c571da33750629b3433767e14e837f3539ebbc20c5a705b25e7e1232a_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_0d970ac32acac140a0fbe4c1ea40c6c18ddf04197ece928b692f394a6c5e853a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d970ac32acac140a0fbe4c1ea40c6c18ddf04197ece928b692f394a6c5e853a->enter($__internal_0d970ac32acac140a0fbe4c1ea40c6c18ddf04197ece928b692f394a6c5e853a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) || array_key_exists("is_writable", $context) ? $context["is_writable"] : (function () { throw new Twig_Error_Runtime('Variable "is_writable" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) || array_key_exists("is_writable", $context) ? $context["is_writable"] : (function () { throw new Twig_Error_Runtime('Variable "is_writable" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) || array_key_exists("yml_path", $context) ? $context["yml_path"] : (function () { throw new Twig_Error_Runtime('Variable "yml_path" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) || array_key_exists("yml_path", $context) ? $context["yml_path"] : (function () { throw new Twig_Error_Runtime('Variable "yml_path" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) || array_key_exists("welcome_url", $context) ? $context["welcome_url"] : (function () { throw new Twig_Error_Runtime('Variable "welcome_url" does not exist.', 24, $this->getSourceContext()); })())) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) || array_key_exists("welcome_url", $context) ? $context["welcome_url"] : (function () { throw new Twig_Error_Runtime('Variable "welcome_url" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_0d970ac32acac140a0fbe4c1ea40c6c18ddf04197ece928b692f394a6c5e853a->leave($__internal_0d970ac32acac140a0fbe4c1ea40c6c18ddf04197ece928b692f394a6c5e853a_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SensioDistributionBundle::Configurator/layout.html.twig\" %}

{% block content_class %}config_done{% endblock %}
{% block content %}
    <div class=\"step\">
        <h1>Well done!</h1>
        {% if is_writable %}
        <h2>Your distribution is configured!</h2>
        {% else %}
        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        {% endif %}
        <h3>
            <span>
                {% if is_writable %}
                    Your parameters.yml file has been overwritten with these parameters (in <em>{{ yml_path }}</em>):
                {% else %}
                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>{{ yml_path }}</em>:
                {% endif %}
            </span>
        </h3>

        <textarea class=\"symfony-configuration\">{{ parameters }}</textarea>

        {% if welcome_url %}
            <ul>
                <li><a href=\"{{ welcome_url }}\">Go to the Welcome page</a></li>
            </ul>
        {% endif %}
    </div>
{% endblock %}
", "SensioDistributionBundle:Configurator:final.html.twig", "/home/kuba/Workspace/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/final.html.twig");
    }
}
