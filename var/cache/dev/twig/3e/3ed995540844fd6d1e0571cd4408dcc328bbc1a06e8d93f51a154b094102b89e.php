<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_09dba52c1a6c22a37ad2c22f20343880e6be03ff21eeb4f267a2dfd40bfda2dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c42c20380462286a96c540bf17f7269b7127c2b114627753e0536fa5c559c5d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42c20380462286a96c540bf17f7269b7127c2b114627753e0536fa5c559c5d6->enter($__internal_c42c20380462286a96c540bf17f7269b7127c2b114627753e0536fa5c559c5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_aa5f03d0dd33f74b0b0244dd0e787a1e6643b358feaa8de5d58e1fe504aa717b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5f03d0dd33f74b0b0244dd0e787a1e6643b358feaa8de5d58e1fe504aa717b->enter($__internal_aa5f03d0dd33f74b0b0244dd0e787a1e6643b358feaa8de5d58e1fe504aa717b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c42c20380462286a96c540bf17f7269b7127c2b114627753e0536fa5c559c5d6->leave($__internal_c42c20380462286a96c540bf17f7269b7127c2b114627753e0536fa5c559c5d6_prof);

        
        $__internal_aa5f03d0dd33f74b0b0244dd0e787a1e6643b358feaa8de5d58e1fe504aa717b->leave($__internal_aa5f03d0dd33f74b0b0244dd0e787a1e6643b358feaa8de5d58e1fe504aa717b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_57f338de721542428b79939c468c8f719747b064cfcb8025da716b1e86f359da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f338de721542428b79939c468c8f719747b064cfcb8025da716b1e86f359da->enter($__internal_57f338de721542428b79939c468c8f719747b064cfcb8025da716b1e86f359da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b56f35cfac333b7b51382a3757f86a175dfabee277f92c17c30f2331c311452b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56f35cfac333b7b51382a3757f86a175dfabee277f92c17c30f2331c311452b->enter($__internal_b56f35cfac333b7b51382a3757f86a175dfabee277f92c17c30f2331c311452b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b56f35cfac333b7b51382a3757f86a175dfabee277f92c17c30f2331c311452b->leave($__internal_b56f35cfac333b7b51382a3757f86a175dfabee277f92c17c30f2331c311452b_prof);

        
        $__internal_57f338de721542428b79939c468c8f719747b064cfcb8025da716b1e86f359da->leave($__internal_57f338de721542428b79939c468c8f719747b064cfcb8025da716b1e86f359da_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
