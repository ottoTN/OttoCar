<?php

/* compte/edit.html.twig */
class __TwigTemplate_fe5c6b55a5371010fd4089c4aefc16d162dcf288acc2ea56bd7a332f4cc217ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/edit.html.twig", 1);
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
        $__internal_9827ab4dbf3cc154b503a81992148eed6786b3a4f8e3e588b15f15e78b321581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9827ab4dbf3cc154b503a81992148eed6786b3a4f8e3e588b15f15e78b321581->enter($__internal_9827ab4dbf3cc154b503a81992148eed6786b3a4f8e3e588b15f15e78b321581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/edit.html.twig"));

        $__internal_4bb6a7986d849048a40a570a848a7177f8c891ddc495dd37613d98ade285ca92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb6a7986d849048a40a570a848a7177f8c891ddc495dd37613d98ade285ca92->enter($__internal_4bb6a7986d849048a40a570a848a7177f8c891ddc495dd37613d98ade285ca92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9827ab4dbf3cc154b503a81992148eed6786b3a4f8e3e588b15f15e78b321581->leave($__internal_9827ab4dbf3cc154b503a81992148eed6786b3a4f8e3e588b15f15e78b321581_prof);

        
        $__internal_4bb6a7986d849048a40a570a848a7177f8c891ddc495dd37613d98ade285ca92->leave($__internal_4bb6a7986d849048a40a570a848a7177f8c891ddc495dd37613d98ade285ca92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c30bd46c826fee38ab16cb8f21dbeda20611596bd0a75f168c66c0e597455b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30bd46c826fee38ab16cb8f21dbeda20611596bd0a75f168c66c0e597455b37->enter($__internal_c30bd46c826fee38ab16cb8f21dbeda20611596bd0a75f168c66c0e597455b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_850d54b7ccf94f2ee373b69626cfd3e5ed05613fa19a10267837f96158bcd402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850d54b7ccf94f2ee373b69626cfd3e5ed05613fa19a10267837f96158bcd402->enter($__internal_850d54b7ccf94f2ee373b69626cfd3e5ed05613fa19a10267837f96158bcd402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Compte edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_index");
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
        
        $__internal_850d54b7ccf94f2ee373b69626cfd3e5ed05613fa19a10267837f96158bcd402->leave($__internal_850d54b7ccf94f2ee373b69626cfd3e5ed05613fa19a10267837f96158bcd402_prof);

        
        $__internal_c30bd46c826fee38ab16cb8f21dbeda20611596bd0a75f168c66c0e597455b37->leave($__internal_c30bd46c826fee38ab16cb8f21dbeda20611596bd0a75f168c66c0e597455b37_prof);

    }

    public function getTemplateName()
    {
        return "compte/edit.html.twig";
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
    <h1>Compte edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('compte_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "compte/edit.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\app\\Resources\\views\\compte\\edit.html.twig");
    }
}
