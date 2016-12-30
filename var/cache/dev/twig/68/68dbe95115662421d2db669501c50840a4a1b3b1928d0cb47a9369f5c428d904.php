<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_46bf86416af03f182d15e03cc4e3f932afb1c09a63bd0391f70c7f6b478d4848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_098c778f26e3f4db8fae2bf0ada272e394f4e6d89aa52e55cacc16649c3e9dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098c778f26e3f4db8fae2bf0ada272e394f4e6d89aa52e55cacc16649c3e9dbf->enter($__internal_098c778f26e3f4db8fae2bf0ada272e394f4e6d89aa52e55cacc16649c3e9dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_6e8096ff09641be6cc4bc8552cb67c63c6309a97c227677f57344bf40884f185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8096ff09641be6cc4bc8552cb67c63c6309a97c227677f57344bf40884f185->enter($__internal_6e8096ff09641be6cc4bc8552cb67c63c6309a97c227677f57344bf40884f185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_098c778f26e3f4db8fae2bf0ada272e394f4e6d89aa52e55cacc16649c3e9dbf->leave($__internal_098c778f26e3f4db8fae2bf0ada272e394f4e6d89aa52e55cacc16649c3e9dbf_prof);

        
        $__internal_6e8096ff09641be6cc4bc8552cb67c63c6309a97c227677f57344bf40884f185->leave($__internal_6e8096ff09641be6cc4bc8552cb67c63c6309a97c227677f57344bf40884f185_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0606d3e76c7f87442ef94250a76b7a4cd8d33bea02f64a57f02453ac94ceeedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0606d3e76c7f87442ef94250a76b7a4cd8d33bea02f64a57f02453ac94ceeedb->enter($__internal_0606d3e76c7f87442ef94250a76b7a4cd8d33bea02f64a57f02453ac94ceeedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb9bd576d477f0e526cba5faf7b24c5c4b6479fb7c32a5ff236ca18b6fe9d829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9bd576d477f0e526cba5faf7b24c5c4b6479fb7c32a5ff236ca18b6fe9d829->enter($__internal_fb9bd576d477f0e526cba5faf7b24c5c4b6479fb7c32a5ff236ca18b6fe9d829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fb9bd576d477f0e526cba5faf7b24c5c4b6479fb7c32a5ff236ca18b6fe9d829->leave($__internal_fb9bd576d477f0e526cba5faf7b24c5c4b6479fb7c32a5ff236ca18b6fe9d829_prof);

        
        $__internal_0606d3e76c7f87442ef94250a76b7a4cd8d33bea02f64a57f02453ac94ceeedb->leave($__internal_0606d3e76c7f87442ef94250a76b7a4cd8d33bea02f64a57f02453ac94ceeedb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_17f8d3a17938cf151d4e5fcbac369b151b497069ce04f63243ac7d50acdfa8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17f8d3a17938cf151d4e5fcbac369b151b497069ce04f63243ac7d50acdfa8b1->enter($__internal_17f8d3a17938cf151d4e5fcbac369b151b497069ce04f63243ac7d50acdfa8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d804e6538b155e51540df9582fe8bcd839535679564e4ca593c2bd670924441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d804e6538b155e51540df9582fe8bcd839535679564e4ca593c2bd670924441->enter($__internal_5d804e6538b155e51540df9582fe8bcd839535679564e4ca593c2bd670924441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5d804e6538b155e51540df9582fe8bcd839535679564e4ca593c2bd670924441->leave($__internal_5d804e6538b155e51540df9582fe8bcd839535679564e4ca593c2bd670924441_prof);

        
        $__internal_17f8d3a17938cf151d4e5fcbac369b151b497069ce04f63243ac7d50acdfa8b1->leave($__internal_17f8d3a17938cf151d4e5fcbac369b151b497069ce04f63243ac7d50acdfa8b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
