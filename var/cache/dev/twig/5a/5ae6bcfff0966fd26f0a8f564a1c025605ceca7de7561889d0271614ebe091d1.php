<?php

/* fiche/new.html.twig */
class __TwigTemplate_81d18e11d5c4dba1e6fbfdc1e0d5155fa748e5a8493ede5e0615d805fbbb2e96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/new.html.twig", 1);
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
        $__internal_af2ef9abb8ceae5ae5c250813a310798558af380e86148a5f04b3fee184fbe00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2ef9abb8ceae5ae5c250813a310798558af380e86148a5f04b3fee184fbe00->enter($__internal_af2ef9abb8ceae5ae5c250813a310798558af380e86148a5f04b3fee184fbe00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/new.html.twig"));

        $__internal_c91951e32a6c653d0940f0d5ab650c51d37f99577665cf41bfe651dbd39c7cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91951e32a6c653d0940f0d5ab650c51d37f99577665cf41bfe651dbd39c7cb3->enter($__internal_c91951e32a6c653d0940f0d5ab650c51d37f99577665cf41bfe651dbd39c7cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af2ef9abb8ceae5ae5c250813a310798558af380e86148a5f04b3fee184fbe00->leave($__internal_af2ef9abb8ceae5ae5c250813a310798558af380e86148a5f04b3fee184fbe00_prof);

        
        $__internal_c91951e32a6c653d0940f0d5ab650c51d37f99577665cf41bfe651dbd39c7cb3->leave($__internal_c91951e32a6c653d0940f0d5ab650c51d37f99577665cf41bfe651dbd39c7cb3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_31274204d603248fce2ea3f3dba602c06871670ea59c56721351cff749da048b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31274204d603248fce2ea3f3dba602c06871670ea59c56721351cff749da048b->enter($__internal_31274204d603248fce2ea3f3dba602c06871670ea59c56721351cff749da048b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f52a9eef8ce8d01e6d91be22ca91e668d8168c830b4a28fc6d6fb14ccf75c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f52a9eef8ce8d01e6d91be22ca91e668d8168c830b4a28fc6d6fb14ccf75c09->enter($__internal_2f52a9eef8ce8d01e6d91be22ca91e668d8168c830b4a28fc6d6fb14ccf75c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fiche creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2f52a9eef8ce8d01e6d91be22ca91e668d8168c830b4a28fc6d6fb14ccf75c09->leave($__internal_2f52a9eef8ce8d01e6d91be22ca91e668d8168c830b4a28fc6d6fb14ccf75c09_prof);

        
        $__internal_31274204d603248fce2ea3f3dba602c06871670ea59c56721351cff749da048b->leave($__internal_31274204d603248fce2ea3f3dba602c06871670ea59c56721351cff749da048b_prof);

    }

    public function getTemplateName()
    {
        return "fiche/new.html.twig";
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
    <h1>Fiche creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('fiche_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "fiche/new.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\fiche\\new.html.twig");
    }
}
