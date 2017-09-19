<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_fac4bda99c1c84e70b593071f7541a85fec033aa67a013a5231a0f75ae7c3c4d extends Twig_Template
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
        $__internal_3c1781df18dd3b4935bf2d9159c272bf58421b17eb450ff052273e366afe99ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1781df18dd3b4935bf2d9159c272bf58421b17eb450ff052273e366afe99ce->enter($__internal_3c1781df18dd3b4935bf2d9159c272bf58421b17eb450ff052273e366afe99ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_e201881d489794c89ef4c7641da73bb695f712a67be16b5bcb677941b3f1fc1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e201881d489794c89ef4c7641da73bb695f712a67be16b5bcb677941b3f1fc1f->enter($__internal_e201881d489794c89ef4c7641da73bb695f712a67be16b5bcb677941b3f1fc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3c1781df18dd3b4935bf2d9159c272bf58421b17eb450ff052273e366afe99ce->leave($__internal_3c1781df18dd3b4935bf2d9159c272bf58421b17eb450ff052273e366afe99ce_prof);

        
        $__internal_e201881d489794c89ef4c7641da73bb695f712a67be16b5bcb677941b3f1fc1f->leave($__internal_e201881d489794c89ef4c7641da73bb695f712a67be16b5bcb677941b3f1fc1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
