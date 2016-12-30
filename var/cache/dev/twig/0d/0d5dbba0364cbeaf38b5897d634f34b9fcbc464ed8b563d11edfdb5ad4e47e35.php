<?php

/* rapport/new.html.twig */
class __TwigTemplate_82ab4475d9b442d677a99155857f0db7cfdb3e1228883f6af6f23dff486f9809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rapport/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_042ed381960434d9265c8b798e9b8e07f7a8c7828571218bca5edf0cb48b769e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042ed381960434d9265c8b798e9b8e07f7a8c7828571218bca5edf0cb48b769e->enter($__internal_042ed381960434d9265c8b798e9b8e07f7a8c7828571218bca5edf0cb48b769e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapport/new.html.twig"));

        $__internal_8b746a431fbb6f55f251e9377572501b66f4b0ebc506b4caafab3f1f0d2c4f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b746a431fbb6f55f251e9377572501b66f4b0ebc506b4caafab3f1f0d2c4f37->enter($__internal_8b746a431fbb6f55f251e9377572501b66f4b0ebc506b4caafab3f1f0d2c4f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapport/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_042ed381960434d9265c8b798e9b8e07f7a8c7828571218bca5edf0cb48b769e->leave($__internal_042ed381960434d9265c8b798e9b8e07f7a8c7828571218bca5edf0cb48b769e_prof);

        
        $__internal_8b746a431fbb6f55f251e9377572501b66f4b0ebc506b4caafab3f1f0d2c4f37->leave($__internal_8b746a431fbb6f55f251e9377572501b66f4b0ebc506b4caafab3f1f0d2c4f37_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_276d5172fa311a061a807048078f25b5e64772f1e33174f0eda4d700e53fa756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276d5172fa311a061a807048078f25b5e64772f1e33174f0eda4d700e53fa756->enter($__internal_276d5172fa311a061a807048078f25b5e64772f1e33174f0eda4d700e53fa756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19ffdb7d4f1dd609ada64f1bdfc6735f905ab8a771720b2e70606ace0010837b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ffdb7d4f1dd609ada64f1bdfc6735f905ab8a771720b2e70606ace0010837b->enter($__internal_19ffdb7d4f1dd609ada64f1bdfc6735f905ab8a771720b2e70606ace0010837b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rapport creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_19ffdb7d4f1dd609ada64f1bdfc6735f905ab8a771720b2e70606ace0010837b->leave($__internal_19ffdb7d4f1dd609ada64f1bdfc6735f905ab8a771720b2e70606ace0010837b_prof);

        
        $__internal_276d5172fa311a061a807048078f25b5e64772f1e33174f0eda4d700e53fa756->leave($__internal_276d5172fa311a061a807048078f25b5e64772f1e33174f0eda4d700e53fa756_prof);

    }

    public function getTemplateName()
    {
        return "rapport/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Rapport creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('rapport_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "rapport/new.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\rapport\\new.html.twig");
    }
}
