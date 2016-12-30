<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_c76ff3cd0a2336bbd7ad4ba433da5471ca3bc6fed67bcb69cac9a60e85782c07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b519e7987ef4cffcd0fa8a35f46dd8c8456c87c147def9bf92fcb206be446d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b519e7987ef4cffcd0fa8a35f46dd8c8456c87c147def9bf92fcb206be446d13->enter($__internal_b519e7987ef4cffcd0fa8a35f46dd8c8456c87c147def9bf92fcb206be446d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_4597cd9192d4937a5787385c0de5faa05b9bf76af3a87f4e641280b502cff238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4597cd9192d4937a5787385c0de5faa05b9bf76af3a87f4e641280b502cff238->enter($__internal_4597cd9192d4937a5787385c0de5faa05b9bf76af3a87f4e641280b502cff238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b519e7987ef4cffcd0fa8a35f46dd8c8456c87c147def9bf92fcb206be446d13->leave($__internal_b519e7987ef4cffcd0fa8a35f46dd8c8456c87c147def9bf92fcb206be446d13_prof);

        
        $__internal_4597cd9192d4937a5787385c0de5faa05b9bf76af3a87f4e641280b502cff238->leave($__internal_4597cd9192d4937a5787385c0de5faa05b9bf76af3a87f4e641280b502cff238_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
