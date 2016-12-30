<?php

/* fournisseur/edit.html.twig */
class __TwigTemplate_d73340c33113b5aa2af1c704c5f10fcfba1751a372c16731a3f90ced44c225c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/edit.html.twig", 1);
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
        $__internal_12c8d9b6c62661430770b9d7bdbb752f80067f803a1d1913784d4d9387e46fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c8d9b6c62661430770b9d7bdbb752f80067f803a1d1913784d4d9387e46fae->enter($__internal_12c8d9b6c62661430770b9d7bdbb752f80067f803a1d1913784d4d9387e46fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/edit.html.twig"));

        $__internal_e04068eda75e20f351f308951f659129c1b453dc8cf10e366fb02df05a8ccbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04068eda75e20f351f308951f659129c1b453dc8cf10e366fb02df05a8ccbac->enter($__internal_e04068eda75e20f351f308951f659129c1b453dc8cf10e366fb02df05a8ccbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fournisseur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12c8d9b6c62661430770b9d7bdbb752f80067f803a1d1913784d4d9387e46fae->leave($__internal_12c8d9b6c62661430770b9d7bdbb752f80067f803a1d1913784d4d9387e46fae_prof);

        
        $__internal_e04068eda75e20f351f308951f659129c1b453dc8cf10e366fb02df05a8ccbac->leave($__internal_e04068eda75e20f351f308951f659129c1b453dc8cf10e366fb02df05a8ccbac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1824a67ebb64117038003461458af49222e6ac97b2afedebb039e008a4fcc2d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1824a67ebb64117038003461458af49222e6ac97b2afedebb039e008a4fcc2d3->enter($__internal_1824a67ebb64117038003461458af49222e6ac97b2afedebb039e008a4fcc2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a015fe6d7b3f5b95d9e9fb407931fba3ef8583f5eaa40e351ed8f99eee11706e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a015fe6d7b3f5b95d9e9fb407931fba3ef8583f5eaa40e351ed8f99eee11706e->enter($__internal_a015fe6d7b3f5b95d9e9fb407931fba3ef8583f5eaa40e351ed8f99eee11706e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fournisseur edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_index");
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
        
        $__internal_a015fe6d7b3f5b95d9e9fb407931fba3ef8583f5eaa40e351ed8f99eee11706e->leave($__internal_a015fe6d7b3f5b95d9e9fb407931fba3ef8583f5eaa40e351ed8f99eee11706e_prof);

        
        $__internal_1824a67ebb64117038003461458af49222e6ac97b2afedebb039e008a4fcc2d3->leave($__internal_1824a67ebb64117038003461458af49222e6ac97b2afedebb039e008a4fcc2d3_prof);

    }

    public function getTemplateName()
    {
        return "fournisseur/edit.html.twig";
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
    <h1>Fournisseur edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('fournisseur_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "fournisseur/edit.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\fournisseur\\edit.html.twig");
    }
}
