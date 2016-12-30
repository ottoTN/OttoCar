<?php

/* rapport/index.html.twig */
class __TwigTemplate_be8854508c5c697e52e13da547faf4671158d6516e42a489767cffe9972965f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rapport/index.html.twig", 1);
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
        $__internal_4ae5bb60ff105439439e36f2b63183fd7a237e1fad9bafb341e943a013638e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae5bb60ff105439439e36f2b63183fd7a237e1fad9bafb341e943a013638e6c->enter($__internal_4ae5bb60ff105439439e36f2b63183fd7a237e1fad9bafb341e943a013638e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapport/index.html.twig"));

        $__internal_5640581698268db116f546355fd8c321d5532679f087c64b0503ce3546fde31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5640581698268db116f546355fd8c321d5532679f087c64b0503ce3546fde31b->enter($__internal_5640581698268db116f546355fd8c321d5532679f087c64b0503ce3546fde31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapport/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ae5bb60ff105439439e36f2b63183fd7a237e1fad9bafb341e943a013638e6c->leave($__internal_4ae5bb60ff105439439e36f2b63183fd7a237e1fad9bafb341e943a013638e6c_prof);

        
        $__internal_5640581698268db116f546355fd8c321d5532679f087c64b0503ce3546fde31b->leave($__internal_5640581698268db116f546355fd8c321d5532679f087c64b0503ce3546fde31b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bc3e33e681c831f573bdf4f169b559592dd0f2649b36707310d26eb5f168808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc3e33e681c831f573bdf4f169b559592dd0f2649b36707310d26eb5f168808->enter($__internal_6bc3e33e681c831f573bdf4f169b559592dd0f2649b36707310d26eb5f168808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3c66b1fe1be4ef95e6c1f9c8d23fd98f03af7189ad3170dd271e24c4041d431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c66b1fe1be4ef95e6c1f9c8d23fd98f03af7189ad3170dd271e24c4041d431->enter($__internal_f3c66b1fe1be4ef95e6c1f9c8d23fd98f03af7189ad3170dd271e24c4041d431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rapports list</h1>

    <table>
        <thead>
            <tr>
                <th>Daterapport</th>
                <th>Totalrapport</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) ? $context["rapports"] : $this->getContext($context, "rapports")));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_show", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapport"], "daterapport", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapport"], "totalrapport", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapport"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_show", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_edit", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rapport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_new");
        echo "\">Create a new rapport</a>
        </li>
    </ul>
";
        
        $__internal_f3c66b1fe1be4ef95e6c1f9c8d23fd98f03af7189ad3170dd271e24c4041d431->leave($__internal_f3c66b1fe1be4ef95e6c1f9c8d23fd98f03af7189ad3170dd271e24c4041d431_prof);

        
        $__internal_6bc3e33e681c831f573bdf4f169b559592dd0f2649b36707310d26eb5f168808->leave($__internal_6bc3e33e681c831f573bdf4f169b559592dd0f2649b36707310d26eb5f168808_prof);

    }

    public function getTemplateName()
    {
        return "rapport/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Rapports list</h1>

    <table>
        <thead>
            <tr>
                <th>Daterapport</th>
                <th>Totalrapport</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for rapport in rapports %}
            <tr>
                <td><a href=\"{{ path('rapport_show', { 'id': rapport.id }) }}\">{{ rapport.daterapport }}</a></td>
                <td>{{ rapport.totalrapport }}</td>
                <td>{{ rapport.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('rapport_show', { 'id': rapport.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('rapport_edit', { 'id': rapport.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rapport_new') }}\">Create a new rapport</a>
        </li>
    </ul>
{% endblock %}
", "rapport/index.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\Garage\\app\\Resources\\views\\rapport\\index.html.twig");
    }
}
