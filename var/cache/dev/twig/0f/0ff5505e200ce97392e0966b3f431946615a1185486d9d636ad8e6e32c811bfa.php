<?php

/* employe/edit.html.twig */
class __TwigTemplate_6652828db40c7ee66cc26ccbef893762e8f761fcd6ac40738b8e385825aaa37e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employe/edit.html.twig", 1);
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
        $__internal_0e764ee0eb796b57ae36a6e5e606b21111dedef57213964b885408ff3e80e7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e764ee0eb796b57ae36a6e5e606b21111dedef57213964b885408ff3e80e7b9->enter($__internal_0e764ee0eb796b57ae36a6e5e606b21111dedef57213964b885408ff3e80e7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/edit.html.twig"));

        $__internal_ed2ad4f07f3c5a9f2e5247ddc972eb7496d31847d45353c6ae9a696680d09f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2ad4f07f3c5a9f2e5247ddc972eb7496d31847d45353c6ae9a696680d09f66->enter($__internal_ed2ad4f07f3c5a9f2e5247ddc972eb7496d31847d45353c6ae9a696680d09f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e764ee0eb796b57ae36a6e5e606b21111dedef57213964b885408ff3e80e7b9->leave($__internal_0e764ee0eb796b57ae36a6e5e606b21111dedef57213964b885408ff3e80e7b9_prof);

        
        $__internal_ed2ad4f07f3c5a9f2e5247ddc972eb7496d31847d45353c6ae9a696680d09f66->leave($__internal_ed2ad4f07f3c5a9f2e5247ddc972eb7496d31847d45353c6ae9a696680d09f66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8870eb33b2acbab12d3ebf263e74c2057921450e3299527b022429c1db0467c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8870eb33b2acbab12d3ebf263e74c2057921450e3299527b022429c1db0467c8->enter($__internal_8870eb33b2acbab12d3ebf263e74c2057921450e3299527b022429c1db0467c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1d6380d4df6c41f391e0cf56e146da83e7f165bcf962399fb98a45218704bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d6380d4df6c41f391e0cf56e146da83e7f165bcf962399fb98a45218704bbf->enter($__internal_a1d6380d4df6c41f391e0cf56e146da83e7f165bcf962399fb98a45218704bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employe edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a1d6380d4df6c41f391e0cf56e146da83e7f165bcf962399fb98a45218704bbf->leave($__internal_a1d6380d4df6c41f391e0cf56e146da83e7f165bcf962399fb98a45218704bbf_prof);

        
        $__internal_8870eb33b2acbab12d3ebf263e74c2057921450e3299527b022429c1db0467c8->leave($__internal_8870eb33b2acbab12d3ebf263e74c2057921450e3299527b022429c1db0467c8_prof);

    }

    public function getTemplateName()
    {
        return "employe/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Employe edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('employe_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "employe/edit.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\employe\\edit.html.twig");
    }
}
