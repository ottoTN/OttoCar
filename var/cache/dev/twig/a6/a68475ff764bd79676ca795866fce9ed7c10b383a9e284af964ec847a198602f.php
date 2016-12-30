<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_e15765f678003de372674cf3d0e76027d3e165d766808f253ff849e2af4ed005 extends Twig_Template
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
        $__internal_e1da62cea3a2bbc649f470020dbfeb213297e6cb23242c63a8dccdad33984108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1da62cea3a2bbc649f470020dbfeb213297e6cb23242c63a8dccdad33984108->enter($__internal_e1da62cea3a2bbc649f470020dbfeb213297e6cb23242c63a8dccdad33984108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_dd96629a212d4189701ffe90fcd2766b9c365af3b70ee620a92e96732ab4e736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd96629a212d4189701ffe90fcd2766b9c365af3b70ee620a92e96732ab4e736->enter($__internal_dd96629a212d4189701ffe90fcd2766b9c365af3b70ee620a92e96732ab4e736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e1da62cea3a2bbc649f470020dbfeb213297e6cb23242c63a8dccdad33984108->leave($__internal_e1da62cea3a2bbc649f470020dbfeb213297e6cb23242c63a8dccdad33984108_prof);

        
        $__internal_dd96629a212d4189701ffe90fcd2766b9c365af3b70ee620a92e96732ab4e736->leave($__internal_dd96629a212d4189701ffe90fcd2766b9c365af3b70ee620a92e96732ab4e736_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
