<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7a3a6e23b828753f22a4c52f5c1c97dedf8f533bc3c634555190585ee60081f2 extends Twig_Template
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
        $__internal_e923c244a63fe70ab402a0e1fb9627215aa507fe846e2195379bdd9391487a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e923c244a63fe70ab402a0e1fb9627215aa507fe846e2195379bdd9391487a69->enter($__internal_e923c244a63fe70ab402a0e1fb9627215aa507fe846e2195379bdd9391487a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5b9a9c69047bac100df3a6173766e43f1002ab31605c9b96dc8ae37e2ac068e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9a9c69047bac100df3a6173766e43f1002ab31605c9b96dc8ae37e2ac068e3->enter($__internal_5b9a9c69047bac100df3a6173766e43f1002ab31605c9b96dc8ae37e2ac068e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e923c244a63fe70ab402a0e1fb9627215aa507fe846e2195379bdd9391487a69->leave($__internal_e923c244a63fe70ab402a0e1fb9627215aa507fe846e2195379bdd9391487a69_prof);

        
        $__internal_5b9a9c69047bac100df3a6173766e43f1002ab31605c9b96dc8ae37e2ac068e3->leave($__internal_5b9a9c69047bac100df3a6173766e43f1002ab31605c9b96dc8ae37e2ac068e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
